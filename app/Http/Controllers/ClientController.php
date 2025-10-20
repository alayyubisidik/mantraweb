<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        return view("dashboard.client.index", [
            "clients" => Client::all()

        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.client.create");
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'job_title' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email',
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

        if ($request->hasFile('company_logo_url')) {
            $path = $request->file('company_logo_url')->store('company-logo', 'public');
            $validated['company_logo_url'] = $path;
        }

        Client::create($validated);

        return redirect('/dashboard/client')->with('message-success', 'Client berhasil ditambahkan!');
    }


    public function update(Request $request, $clientId)
    {
        $client = Client::find($clientId);

        if (!$client) {
            return redirect('/dashboard/client')->with('message-error', 'Client tidak ditemukan!');
        }

        if ($request->isMethod("GET")) {
            return view("dashboard.client.update", [
                "client" => $client
            ]);
        }

        $validated = $request->validate([
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

        if ($request->hasFile('company_logo_url')) {
            if ($client->company_logo_url && Storage::disk('public')->exists($client->company_logo_url)) {
                Storage::disk('public')->delete($client->company_logo_url);
            }

            $path = $request->file('company_logo_url')->store('company-logo', 'public');
            $validated['company_logo_url'] = $path;
        } else {
            unset($validated['company_logo_url']);
        }

        $client->update($validated);

        return redirect('/dashboard/client')->with('message-success', 'Client berhasil diperbarui!');
    }


    public function delete($clientId)
    {
        $client = Client::find($clientId);

        if (!$client) {
            return redirect('/dashboard/client')->with('message-error', 'Client tidak ditemukan!');
        }

        if ($client->company_logo_url && Storage::disk('public')->exists($client->company_logo_url)) {
            Storage::disk('public')->delete($client->company_logo_url);
        }

        $client->delete();

        return redirect('/dashboard/client')->with('message-success', 'Client berhasil dihapus!');
    }
}
