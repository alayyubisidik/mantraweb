<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Testimonial;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.testimonial.index', [
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.testimonial.create', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            // Contoh helper upload (hapus lama dan simpan baru)
            $imagePath = $this->uploadFile($request->file('image_url'), $request->image_url, 'images/testimonial-profile');
            $validated["image_url"] = $imagePath;
        }

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('message-success', 'Testimonial berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonial.edit', [
            'testimonial' => $testimonial,
            'clients' => Client::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
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

         // Jika ada file logo baru
        if ($request->hasFile('image_url')) {
            // Contoh helper upload (hapus lama dan simpan baru)
            $imagePath = $this->uploadFile($request->file('image_url'), $testimonial->image_url, 'images/testimonial-profile');
            $testimonial->image_url = $imagePath;
        }

        $testimonial->client_id = $request->client_id;
        $testimonial->message = $request->message;
        $testimonial->rating = $request->rating;
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('message-success', 'Testimonial berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image_url && Storage::disk('public')->exists($testimonial->image_url)) {
            Storage::disk('public')->delete($testimonial->image_url);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('message-success', 'Testimonial berhasil dihapus!');
    }
}
