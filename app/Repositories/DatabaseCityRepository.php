<?php

namespace App\Repositories;

use App\Models\City;

class DatabaseCityRepository implements CityRepository
{
    public function getAllCities()
    {
        return City::all();
    }

    public function getCityById($id)
    {
        return City::find($id);
    }
}
