<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Section;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("dashboard.product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features = Feature::all();
        $sections = Section::all();
        $categories = Category::all();
        return view("dashboard.product.create", compact("features", "sections", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // 1. Validasi input dengan custom messages
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:products,name',
            'description' => 'required|string',
            'price_start' => 'required|numeric|min:0',
            'price_max' => 'required|numeric|gte:price_start',
            'thumbnail_url' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'features' => 'required|array|min:1',
            'features.*' => 'required|exists:features,id',
            'sections' => 'required|array|min:1',
            'sections.*' => 'required|exists:sections,id',
            'categories' => 'required|array|min:1',
            'categories.*' => 'required|exists:sections,id',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'name.unique' => 'Nama sudah dipakai',

            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',

            'price_start.required' => 'Harga awal wajib diisi.',
            'price_start.numeric' => 'Harga awal harus berupa angka.',
            'price_start.min' => 'Harga awal minimal 0.',

            'price_max.required' => 'Harga maksimal wajib diisi.',
            'price_max.numeric' => 'Harga maksimal harus berupa angka.',
            'price_max.gte' => 'Harga maksimal harus lebih besar atau sama dengan harga awal.',

            'thumbnail_url.required' => 'Thumbnail wajib diunggah.',
            'thumbnail_url.image' => 'Thumbnail harus berupa gambar.',
            'thumbnail_url.mimes' => 'Thumbnail harus berformat jpeg, png, jpg, gif, atau webp.',
            'thumbnail_url.max' => 'Ukuran thumbnail maksimal 2MB.',

            'features.required' => 'Harap pilih minimal satu feature.',
            'features.array' => 'Features harus berupa array.',
            'features.*.required' => 'Feature yang dipilih tidak boleh kosong.',
            'features.*.exists' => 'Feature yang dipilih tidak valid.',

            'sections.required' => 'Harap pilih minimal satu section.',
            'sections.array' => 'Sections harus berupa array.',
            'sections.*.required' => 'Section yang dipilih tidak boleh kosong.',
            'sections.*.exists' => 'Section yang dipilih tidak valid.',

            'categories.required' => 'Harap pilih minimal satu kategori.',
            'categories.array' => 'Kategori harus berupa array.',
            'categories.*.required' => 'Kategori yang dipilih tidak boleh kosong.',
            'categories.*.exists' => 'Kategori yang dipilih tidak valid.',

            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',
        ]);


        $filepath = $this->uploadFile($request->file("thumbnail_url"), null, "images/product-thumbnails");
        $validated["thumbnail_url"] = $filepath;

        $validated["slug"] = Str::slug($validated["name"]);
        $product = Product::create($validated);

        // 4. Sync relasi many-to-many
        $product->features()->sync($validated['features']);
        $product->sections()->sync($validated['sections']);
        $product->categories()->sync($validated['categories']);

        // 5. Redirect dengan pesan sukses
        return redirect()->route('products.index')->with('message-success', 'Produk berhasil dibuat.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $features = Feature::all();
        $sections = Section::all();
        $categories = Category::all();
        return view("dashboard.product.edit", compact("product", "features", "sections", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // 1️⃣ Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'description' => 'required|string',
            'price_start' => 'required|numeric|min:0',
            'price_max' => 'required|numeric|gte:price_start',
            'status' => 'required|in:active,inactive',
            'features' => 'required|array',
            'features.*' => 'exists:features,id',
            'sections' => 'required|array',
            'sections.*' => 'exists:sections,id',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.unique' => 'Nama sudah digunakan.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'description.required' => 'Deskripsi wajib diisi.',
            'price_start.required' => 'Harga awal wajib diisi.',
            'price_start.numeric' => 'Harga awal harus berupa angka.',
            'price_max.required' => 'Harga maksimal wajib diisi.',
            'price_max.numeric' => 'Harga maksimal harus berupa angka.',
            'price_max.gte' => 'Harga maksimal tidak boleh lebih kecil dari harga awal.',
            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status hanya boleh Active atau Inactive.',
            'features.required' => 'Pilih minimal satu fitur.',
            'features.*.exists' => 'Fitur yang dipilih tidak valid.',
            'sections.required' => 'Pilih minimal satu section.',
            'sections.*.exists' => 'Section yang dipilih tidak valid.',
            'categories.required' => 'Pilih minimal satu kategori.',
            'categories.*.exists' => 'Kategori yang dipilih tidak valid.',
        ]);

        $product->name = $validated['name'];
        $product->slug = Str::slug($validated['name']);
        $product->description = $validated['description'];
        $product->price_start = $validated['price_start'];
        $product->price_max = $validated['price_max'];
        $product->status = $validated['status'];

        // 3️⃣ Cek jika ada file thumbnail baru
        if ($request->hasFile('thumbnail_url')) {
            // misalnya kamu punya helper upload file seperti ini:
            $thumbnailPath = $this->uploadFile($request->file('thumbnail_url'), $product->thumbnail_url, 'images/product-thumbnails');
            $product->thumbnail_url = $thumbnailPath;
        }
 
        // 4️⃣ Simpan perubahan ke database
        $product->save();

        // 3️⃣ Sinkronisasi relasi many-to-many
        $product->features()->sync($validated['features']);
        $product->sections()->sync($validated['sections']);
        $product->categories()->sync($validated['categories']);

        // 4️⃣ Redirect dengan pesan sukses
        return redirect()->route('products.index')
            ->with('message-success', 'Produk berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        File::delete(public_path($product->thumbnail_url));

        $product->delete();

        return redirect()->route("products.index")->with('message-success', 'Product berhasil dihapus!');
    }
}
