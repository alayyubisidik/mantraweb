<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view("dashboard.category.index", [
            "categories" => Category::all()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.category.create");
        }

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'description' => 'required|string|max:500',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string' => 'Nama kategori harus berupa teks.',
            'name.max' => 'Nama kategori maksimal 150 karakter.',
            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 500 karakter.',
        ]);

        Category::create($validated);

        return redirect('/dashboard/category')->with('message-success', 'Category berhasil ditambahkan!');
    }

    public function update(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            return redirect('/dashboard/category')->with('message-error', 'Category tidak ditemukan!');
        }

        if ($request->isMethod("GET")) {
            return view("dashboard.category.update", [
                "category" => $category
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'description' => 'required|string|max:500',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string' => 'Nama kategori harus berupa teks.',
            'name.max' => 'Nama kategori maksimal 150 karakter.',
            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 500 karakter.',
        ]);

        $category->update($validated);

        return redirect('/dashboard/category')->with('message-success', 'Category berhasil diperbarui!');
    }


    public function delete($categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            return redirect('/dashboard/category')->with('message-error', 'Category tidak ditemukan!');
        }

        $category->delete();

        return redirect('/dashboard/category')->with('message-success', 'Category berhasil dihapus!');
    }
}
