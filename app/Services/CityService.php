<?php


namespace App\Services;

use App\Repositories\CityRepository;

class CityService {
    protected $cityRepository;

    public function __construct(CityRepository $repository) {
        $this->cityRepository = $repository;
    }

    public function getAllCities() {
        return $this->cityRepository->getAllCities();
    }

    public function getCityById($id) {
        return $this->cityRepository->getCityById($id);
    }
}
