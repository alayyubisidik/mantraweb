<?php

namespace App\Http\Controllers;

use App\Mail\AdminOrderMail;
use App\Mail\ClientOrderMail;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use App\Models\Team;
use App\Models\Testimonial;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    use FileUploadTrait;
    public function index()
    {
        $data = [
            'teams' => Team::limit(5)->get(),
            'testimonials' => Testimonial::with('client')
                ->latest()
                ->limit(3)
                ->get(),
        ];

        return view('landing.index', $data);

        // $testimonials = Testimonial::with('client')
        //     ->latest()
        //     ->limit(3)
        //     ->get();

        // return view('landing.index', compact('teams', 'testimonials'));
    }

    public function about()
    {
        return view('landing.about');
    }

    public function team()
    {
        $teams = Team::all();

        return view('landing.team')->with('teams', $teams);
    }

    public function project()
    {
        $projects = Project::all();

        return view('landing.project')->with('projects', $projects);
    }
    public function projectDetail($slug)
    {
        // Ambil project berdasarkan slug
        $project = Project::with(['client', 'categories'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Kirim ke view dengan with()
        return view('landing.project-detail')->with('project', $project);
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function products(Request $request)
    {
        $categories = Category::all();

        $categoryId = $request->query('category');

        if ($categoryId) {
            $products = Product::whereHas('categories', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            })->get();
        } else {
            $products = Product::all();
        }

        return view('landing.product', compact('products', 'categories', 'categoryId'));
    }

    public function productDetail($slug)
    {
        // Cari product berdasarkan slug
        $product = Product::where('slug', $slug)
            ->with(['categories', 'features', 'sections']) // eager load relasi bila perlu
            ->firstOrFail();

        return view('landing.product-detail', compact('product'));
    }

    public function order($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('landing.order', compact('product'));
    }

    public function OrderStore(Request $request, string $slug)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'job_title' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|numeric|digits_between:8,15',
            'address' => 'required|string',
            'company' => 'required|string|max:150',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);

        // 🔍 1. Cek apakah client sudah ada berdasarkan email
        $client = Client::where('email', $request->email)->first();

        if ($client) {
            // 🔍 2. Jika client sudah punya project dengan status draft, tolak
            $hasDraft = Project::where('client_id', $client->id)
                ->where('status', 'draft')
                ->exists();

            if ($hasDraft) {
                return back()->withErrors([
                    'email' => 'Anda sudah memiliki project dengan status draft. Mohon selesaikan terlebih dahulu.',
                ])->withInput();
            }
        } else {
            // 🆕 3. Jika belum ada client, buat baru
            $client = new Client();
            $client->name = $request->name;
            $client->job_title = $request->job_title;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->address = $request->address;
            $client->company = $request->company;

            if ($request->hasFile('company_logo')) {
                $filepath = $this->uploadFile($request->file('company_logo'), null, 'company-logo');
                $client->company_logo_url = $filepath;
            }

            $client->save();
        }

        // 📦 Ambil produk berdasarkan slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // 🏗️ Buat project baru
        Project::create([
            'product_id' => $product->id,
            'client_id' => $client->id,
            'start_date' => now(),
            'status' => 'draft', // bisa diubah sesuai kebutuhan
        ]);

        // 📧 Kirim email ke client dan admin
        Mail::to($client->email)->send(new ClientOrderMail($client, $product));
        Mail::to('eka03juli1980@gmail.com')->send(new AdminOrderMail($client, $product));

        return to_route('pages.order.success');
    }

    public function orderSuccess()
    {
        return view('landing.order-success');
    }
}
