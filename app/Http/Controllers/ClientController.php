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
            'phone' => 'required|numeric|digits_between:8,15',
            'address' => 'required|string|max:255',
            'company' => 'required|string|max:150',
            'company_logo_url' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // max 2MB
        ]);

        $path = $request->file('company_logo_url')->store('company-logo', 'public');
        $validated['company_logo_url'] = $path; // simpan path ke database

        Client::create($validated);

        return redirect("/dashboard/client");
    }

    public function delete($clientId)
    {
        $client = Client::findOrFail($clientId);

        if ($client->company_logo_url && Storage::disk('public')->exists($client->company_logo_url)) {
            Storage::disk('public')->delete($client->company_logo_url);
        }

        $client->delete();

        return redirect('/dashboard/client')->with('success', 'Client deleted successfully.');
    }

    public function update(Request $request, $clientId)
    {
        $client = Client::findOrFail($clientId);

        if ($request->isMethod("GET")) {
            return view("dashboard.client.update", [
                "client" => $client
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'job_title' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|numeric|digits_between:8,15',
            'address' => 'required|string|max:255',
            'company' => 'required|string|max:150',
            'company_logo_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('company_logo_url')) {
            if ($client->company_logo_url && Storage::disk('public')->exists($client->company_logo_url)) {
                Storage::disk('public')->delete($client->company_logo_url);
            }

            $path = $request->file('company_logo_url')->store('company-logo', 'public');
            $validated['company_logo_url'] = $path;
        }

        $client->update($validated);

        return redirect('/dashboard/client')->with('success', 'Client updated successfully.');
    }
}
