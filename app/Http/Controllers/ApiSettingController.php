<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiSetting;

class ApiSettingController extends Controller {
    public function index() {
        $apiSetting = ApiSetting::first();
        return view('admin.api-settings', compact('apiSetting'));
    }

    public function update(Request $request) {
        $request->validate([
            'api_url'   => 'required|url',
            'auth_key'  => 'required|string',
            'auth_value'=> 'required|string',
        ]);

        $apiSetting = ApiSetting::firstOrCreate([]);
        $apiSetting->update($request->all());

        return redirect()->back()->with('success', 'Configuración actualizada correctamente.');
    }
}
