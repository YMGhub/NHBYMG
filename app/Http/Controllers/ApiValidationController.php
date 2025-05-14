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



        //ApplicationType 1=rental and 2 purchase
        $typeApplication = 1;

        if($request->type_form == "Rental"){
            $typeApplication = 1;
        }else{
            $typeApplication = 2;
        }

        try {
            $response = Http::withHeaders([
                $apiSetting->auth_key => $apiSetting->auth_value
            ])->post($apiSetting->api_url, [
                'NRN' => $request->number_national,
                'Applicationtype' => $typeApplication,
                'CoApp' => 0
            ]);



            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }
}
