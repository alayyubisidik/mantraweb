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
            'rating' => 'required|integer|min:1|max:5',
            'image_url' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('image_url')->store('testimonial-images', 'public');
        $validated['image_url'] = $path;

        Testimonial::create($validated);

        return redirect('/dashboard/testimonial')->with('success', 'Testimonial created successfully.');
    }

    public function delete($testimonialId)
    {
        $testimonial = Testimonial::findOrFail($testimonialId);

        if ($testimonial->image_url && Storage::disk('public')->exists($testimonial->image_url)) {
            Storage::disk('public')->delete($testimonial->image_url);
        }

        $testimonial->delete();

        return redirect('/dashboard/testimonial')->with('success', 'Testimonial deleted successfully.');
    }

    public function update(Request $request, $testimonialId)
{
    $testimonial = Testimonial::findOrFail($testimonialId);

    if ($request->isMethod("GET")) {
        return view("dashboard.testimonial.update", [
            "testimonial" => $testimonial,
            "clients" => Client::all(), 
        ]);
    }

    $validated = $request->validate([
        'client_id' => 'required|exists:clients,id',
        'message' => 'required|string|max:1000',
        'rating' => 'required|integer|min:1|max:5',
        'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image_url')) {
        if ($testimonial->image_url && Storage::disk('public')->exists($testimonial->image_url)) {
            Storage::disk('public')->delete($testimonial->image_url);
        }

        $path = $request->file('image_url')->store('testimonial-images', 'public');
        $validated['image_url'] = $path;
    }

    $testimonial->update($validated);

    return redirect('/dashboard/testimonial')->with('success', 'Testimonial updated successfully.');
}
}
