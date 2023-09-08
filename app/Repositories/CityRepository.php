<?php

namespace App\Repositories;

interface CityRepository {
    public function getAllCities();
    public function getCityById($id);
}
