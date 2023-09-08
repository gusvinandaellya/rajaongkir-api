<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class ApiCityRepository implements CityRepository {
    protected $apiKey;

    public function __construct() {
        $this->apiKey = config('services.rajaongkir.api_key');
    }

    public function getAllCities() {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response->json()['rajaongkir']['results'];

        return $cities;
    }

    public function getCityById($id) {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get('https://api.rajaongkir.com/starter/city', [
            'id' => $id
        ]);

        $city = $response->json()['rajaongkir']['results'];

        return $city;
    }
}
