<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Province;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchRajaOngkirData extends Command
{
    protected $signature = 'rajaongkir:fetchdata';
    protected $description = 'Fetch and store data from RajaOngkir API';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $apiKey = env('RAJAONGKIR_KEY');

        $provincesResponse = Http::withHeaders([
            'key' => $apiKey,
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $provincesResponse->json()['rajaongkir']['results'];

        foreach ($provinces as $province) {
            if (!empty($province['province_id'])) {
                Province::updateOrCreate(
                    [
                        'province_id' => $province['province_id'],
                        'province' => $province['province']
                    ],
                );
            }
        }


        $citiesResponse = Http::withHeaders([
            'key' => $apiKey,
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $citiesResponse->json()['rajaongkir']['results'];
        foreach ($cities as $city) {
            City::updateOrCreate([
                'city_id' => $city['city_id']],
                $city);
        }

        $this->info('Data from RajaOngkir API fetched and stored successfully.');
    }
}
