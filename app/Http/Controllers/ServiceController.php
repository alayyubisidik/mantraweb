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
            'description' => 'required|string|max:500',
            'icon_url' => 'required|string|max:2000',
        ]);

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
            'icon_url' => 'required|string|max:2000',
        ]);

        $service->update($validated);

        return redirect('/dashboard/service')->with('success', 'Service updated successfully.');
    }

    
}
