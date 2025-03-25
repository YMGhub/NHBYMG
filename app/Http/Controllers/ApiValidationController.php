<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiSetting;
use Illuminate\Support\Facades\Http;

class ApiValidationController extends Controller {
    public function validateNumber(Request $request) {
        $request->validate(['number_national' => 'required']);

        $apiSetting = ApiSetting::first();
        if (!$apiSetting || !$apiSetting->api_url || !$apiSetting->auth_key || !$apiSetting->auth_value) {
            return response()->json(['error' => 'Configuración de API no encontrada.'], 400);
        }
        
        

        //ApplicationType 2=rental and 3 purchase
        $typeApplication = 2;

        if($request->type_form == "Rental"){
            $typeApplication = 2;
        }else{
            $typeApplication = 3;
        }

        try {
            $response = Http::withHeaders([
                $apiSetting->auth_key => $apiSetting->auth_value
            ])->post($apiSetting->api_url, [
                'NRN' => $request->number_national,
                'Applicationtype' => $typeApplication
            ]);

            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }
}