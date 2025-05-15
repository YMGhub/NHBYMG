<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingsController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        return view('admin.settings.settings', compact('settings'));
    }
    //
    public function update(Request $request)
    {
        // Validar los campos
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'site_description' => 'required|string',
            'site_contact_us' => 'required|string',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
        ]);

        // Obtener o crear una configuración existente
        $settings = SiteSetting::firstOrCreate([]);

        // Manejar la subida del logo
        if ($request->hasFile('logo')) {
            // Eliminar el logo anterior si existe
            if ($settings->logo) {
                Storage::disk('public')->delete($settings->logo);
            }
            // Guardar el nuevo logo
            $settings->logo = $request->file('logo')->store('logos', 'public');
        }

        // Guardar las configuraciones
        $settings->site_description = $request->site_description;
        $settings->site_contact_us = $request->site_contact_us;
        $settings->facebook_url = $request->facebook_url;
        $settings->instagram_url = $request->instagram_url;
        $settings->policy = $request->policy;
        $settings->save();

        return redirect()->back()->with('success', 'Settings saved correctly..');
    }

    public function policy()
{
    $settings = SiteSetting::first(); // o ajusta si usas múltiples configuraciones
    return view('policy', compact('settings'));
}
}
