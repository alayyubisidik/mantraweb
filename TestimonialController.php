<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        return view("dashboard.testimonial.index", [
            'testimonials' => Testimonial::with('client')->get()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('dashboard.testimonial.create', [
                'clients' => Client::all()
            ]);
        }

        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'message' => 'required|string',
            'rating' => 'integer|min:1|max:5',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'client_id.required' => 'Client wajib dipilih.',
            'client_id.exists' => 'Client yang dipilih tidak valid.',
            'message.required' => 'Pesan testimoni wajib diisi.',
            'message.string' => 'Pesan testimoni harus berupa teks.',
            'rating.integer' => 'Rating harus berupa angka.',
            'rating.min' => 'Rating minimal adalah 1 bintang.',
            'rating.max' => 'Rating maksimal adalah 5 bintang.',
            'image_url.image' => 'File harus berupa gambar.',
            'image_url.mimes' => 'Format gambar yang diperbolehkan: JPG, JPEG, PNG, atau WEBP.',
            'image_url.max' => 'Ukuran gambar maksimal 2 MB.',
        ]);

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('testimonial-images', 'public');
            $validated['image_url'] = $path;
        }

        Testimonial::create($validated);

        return redirect('/dashboard/testimonial')->with('message-success', 'Testimonial berhasil ditambahkan!');
    }


    public function update(Request $request, $testimonialId)
    {
        $testimonial = Testimonial::find($testimonialId);

        if (!$testimonial) {
            return redirect('/dashboard/testimonial')->with('message-error', 'Testimonial tidak ditemukan!');
        }

        if ($request->isMethod("GET")) {
            return view("dashboard.testimonial.update", [
                "testimonial" => $testimonial,
                "clients" => Client::all(),
            ]);
        }

        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'message' => 'required|string|max:1000',
            'rating' => 'integer|min:1|max:5',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'client_id.required' => 'Client wajib dipilih.',
            'client_id.exists' => 'Client yang dipilih tidak valid.',
            'message.required' => 'Pesan testimoni wajib diisi.',
            'message.string' => 'Pesan testimoni harus berupa teks.',
            'message.max' => 'Pesan testimoni tidak boleh lebih dari 1000 karakter.',
            'rating.integer' => 'Rating harus berupa angka.',
            'rating.min' => 'Rating minimal adalah 1 bintang.',
            'rating.max' => 'Rating maksimal adalah 5 bintang.',
            'image_url.image' => 'File harus berupa gambar.',
            'image_url.mimes' => 'Format gambar yang diperbolehkan: JPG, JPEG, PNG, atau WEBP.',
            'image_url.max' => 'Ukuran gambar maksimal 2 MB.',
        ]);

        if ($request->hasFile('image_url')) {
            if ($testimonial->image_url && Storage::disk('public')->exists($testimonial->image_url)) {
                Storage::disk('public')->delete($testimonial->image_url);
            }

            $path = $request->file('image_url')->store('testimonial-images', 'public');
            $validated['image_url'] = $path;
        } else {
            unset($validated['image_url']);
        }

        $testimonial->update($validated);

        return redirect('/dashboard/testimonial')->with('message-success', 'Testimonial berhasil diperbarui!');
    }


    public function delete($testimonialId)
    {
        $testimonial = Testimonial::find($testimonialId);

        if (!$testimonial) {
            return redirect('/dashboard/testimonial')->with('message-error', 'Testimonial tidak ditemukan!');
        }

        if ($testimonial->image_url && Storage::disk('public')->exists($testimonial->image_url)) {
            Storage::disk('public')->delete($testimonial->image_url);
        }

        $testimonial->delete();

        return redirect('/dashboard/testimonial')->with('message-success', 'Testimonial berhasil dihapus!');
    }
}
