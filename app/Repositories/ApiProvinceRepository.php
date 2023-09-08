<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class ApiProvinceRepository implements ProvinceRepository {
    protected $apiKey;

    public function __construct() {
        $this->apiKey = config('services.rajaongkir.api_key');
    }

    public function getAllProvinces() {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response->json()['rajaongkir']['results'];

        return $provinces;
    }

    public function getProvinceById($id) {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get('https://api.rajaongkir.com/starter/province', [
            'id' => $id
        ]);

        $province = $response->json()['rajaongkir']['results'];

        return $province;
    }
}
