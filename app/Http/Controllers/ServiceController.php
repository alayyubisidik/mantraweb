<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        return view("dashboard.service.index", [
            "services" => Service::all()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.service.create");
        }

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'description' => 'required|string|max:255',
            'icon_url' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('icon_url')->store('service-icons', 'public');

        $validated['icon_url'] = $path;

        Service::create($validated);

        return redirect('/dashboard/service')->with('success', 'Service created successfully.');
    }

    public function delete($serviceId)
    {
        $service = Service::findOrFail($serviceId);

        if ($service->icon_url && Storage::disk('public')->exists($service->icon_url)) {
            Storage::disk('public')->delete($service->icon_url);
        }

        $service->delete();

        return redirect('/dashboard/service')->with('success', 'Service deleted successfully.');
    }

    public function update(Request $request, $serviceId)
    {
        $service = Service::findOrFail($serviceId);

        if ($request->isMethod("GET")) {
            return view("dashboard.service.update", [
                "service" => $service
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'description' => 'required|string|max:500',
            'icon_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('icon_url')) {
            if ($service->icon_url && Storage::disk('public')->exists($service->icon_url)) {
                Storage::disk('public')->delete($service->icon_url);
            }

            $path = $request->file('icon_url')->store('service-icons', 'public');
            $validated['icon_url'] = $path;
        }

        $service->update($validated);

        return redirect('/dashboard/service')->with('success', 'Service updated successfully.');
    }

    
}
