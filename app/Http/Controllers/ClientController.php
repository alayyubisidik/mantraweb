<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    use FileUploadTrait;
    /**
     * Tampilkan daftar client.
     */
    public function index()
    {
        return view("dashboard.client.index", [
            "clients" => Client::all()
        ]);
    }

    /**
     * Tampilkan form tambah client.
     */
    public function create()
    {
        return view("dashboard.client.create");
    }

    /**
     * Simpan client baru ke database.
     */
    public function edit(Client $client)
    {
        return view('dashboard.client.edit', compact('client'));
    }

    /**
     * Update data client.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'job_title' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'company' => 'nullable|string|max:150',
            'company_logo_url' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'job_title.required' => 'Jabatan wajib diisi.',
            'job_title.max' => 'Jabatan maksimal 100 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.max' => 'Nomor telepon maksimal 255 karakter.',
            'address.required' => 'Alamat wajib diisi.',
            'address.max' => 'Alamat maksimal 255 karakter.',
            'company.max' => 'Nama perusahaan maksimal 150 karakter.',
            'company_logo_url.image' => 'File logo harus berupa gambar.',
            'company_logo_url.mimes' => 'Logo hanya boleh berformat JPG, JPEG, PNG, WEBP, atau SVG.',
            'company_logo_url.max' => 'Ukuran logo maksimal 2MB.',
        ]);

        $client->name = $request->name;
        $client->job_title = $request->job_title;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->company = $request->company;

        // Jika ada file logo baru
        if ($request->hasFile('company_logo_url')) {
            // Contoh helper upload (hapus lama dan simpan baru)
            $logoPath = $this->uploadFile($request->file('company_logo_url'), $client->company_logo_url, 'company-logo');
            $client->company_logo_url = $logoPath;
        }

        $client->save();

        return redirect()->route('clients.index')->with('message-success', 'Client berhasil diperbarui!');
    }

    /**
     * Hapus client.
     */
    public function destroy(Client $client)
    {
        if ($client->project()->exists()) {
            return redirect()
                ->route("clients.index")
                ->with("message-error", "Client tidak dapat dihapus karena masih memiliki project yang terkait.");
        }

        if ($client->company_logo_url && file_exists(public_path($client->company_logo_url))) {
            File::delete(public_path($client->company_logo_url));
        }

        $client->delete();

        return redirect()
            ->route("clients.index")
            ->with("message-success", "Client berhasil dihapus!");
    }
}
