<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Product;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::all();

        return view('dashboard.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:features,name',
        ], [
            'name.required' => 'Nama fitur wajib diisi.',
            'name.max' => 'Nama fitur maksimal 255 karakter.',
            'name.unique' => 'Nama fitur sudah digunakan.',
        ]);

        Feature::create($validated);

        return redirect()->route('features.index')
            ->with('message-success', 'Fitur berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('dashboard.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:features,name,' . $feature->id,
        ], [
            'name.required' => 'Nama fitur wajib diisi.',
            'name.max' => 'Nama fitur maksimal 255 karakter.',
            'name.unique' => 'Nama fitur sudah digunakan.',
        ]);

        $feature->update($validated);

        return redirect()->route('features.index')
            ->with('message-success', 'Fitur berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        if ($feature->products()->count() > 0) {
            return redirect()->route('features.index')
                ->with('message-error', 'Fitur tidak dapat dihapus karena masih digunakan oleh satu atau lebih produk.');
        }

        $feature->delete();

        return redirect()->route('features.index')
            ->with('message-success', 'Fitur berhasil dihapus!');
    }
}
