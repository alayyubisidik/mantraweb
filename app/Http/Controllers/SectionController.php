<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Product;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();

        return view('dashboard.section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sections,name',
        ], [
            'name.required' => 'Nama section wajib diisi.',
            'name.max' => 'Nama section maksimal 255 karakter.',
            'name.unique' => 'Nama section sudah digunakan.',
        ]);

        Section::create($validated);

        return redirect()->route('sections.index')
            ->with('message-success', 'Section berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view('dashboard.section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:sections,name,' . $section->id,
        ], [
            'name.required' => 'Nama section wajib diisi.',
            'name.max' => 'Nama section maksimal 255 karakter.',
            'name.unique' => 'Nama section sudah digunakan.',
        ]);

        $section->update($validated);

        return redirect()->route('sections.index')
            ->with('message-success', 'Section berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        if ($section->products()->count() > 0) {
            return redirect()->route('sections.index')
                ->with('message-error', 'Section tidak dapat dihapus karena masih digunakan oleh satu atau lebih produk.');
        }

        $section->delete();

        return redirect()->route('sections.index')
            ->with('message-success', 'Section berhasil dihapus!');
    }
}
