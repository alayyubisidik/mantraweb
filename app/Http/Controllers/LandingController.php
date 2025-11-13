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
                ->limit(5)
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
        // Ambil project beserta relasi product (yang punya relasi ke category) dan client
        $projects = Project::with(['product.categories', 'client'])
            ->where('status', 'published')
            ->get();

        // Ambil semua kategori dari produk untuk filter di view
        $categories = Category::all();

        return view('landing.project', compact('projects', 'categories'));
    }



    public function projectDetail($slug)
    {
        // Ambil project berdasarkan slug
        $project = Project::with('client', 'product', 'product.categories')
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
        $categoryId = $request->query('category'); // kalau mau filter per kategori
        $categories = Category::all();

        $products = Product::with('categories')->get();

        return view('landing.product', compact('products', 'categories', 'categoryId'));
    }


    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)
            ->with(['categories', 'features', 'sections'])
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
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 100 karakter.',
            'job_title.required' => 'Jabatan wajib diisi.',
            'job_title.max' => 'Jabatan tidak boleh lebih dari 100 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 150 karakter.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.numeric' => 'Nomor telepon hanya boleh berisi angka.',
            'phone.digits_between' => 'Nomor telepon harus terdiri dari 8 hingga 15 digit.',
            'address.required' => 'Alamat wajib diisi.',
            'company.required' => 'Nama perusahaan wajib diisi.',
            'company.max' => 'Nama perusahaan tidak boleh lebih dari 150 karakter.',
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
