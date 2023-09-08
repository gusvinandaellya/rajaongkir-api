<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RajaOngkirController extends Controller
{
//    public function getProvinces()
//    {
//        $apiKey = env('RAJAONGKIR_KEY');
//        $response = Http::withHeaders([
//            'key' => $apiKey,
//        ])->get('https://api.rajaongkir.com/starter/province');
//
//        return $response->json();
//    }
//
//    public function getCities()
//    {
//        $apiKey = env('RAJAONGKIR_KEY');
//        $response = Http::withHeaders([
//            'key' => $apiKey,
//        ])->get('https://api.rajaongkir.com/starter/city');
//
//        return $response->json();
//    }

    public function searchProvinces(Request $request)
    {
        $provinceId = $request->input('id');
        $province = Province::find($provinceId);

        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        return response()->json($province);
    }

    public function searchCities(Request $request)
    {
        $cityId = $request->input('id');
        $city = City::find($cityId);

        if (!$city) {
            return response()->json(['message' => 'City not found'], 404);
        }

        return response()->json($city);
    }
}
