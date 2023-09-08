<?php

namespace App\Http\Controllers;

use App\Services\CityService;

class CityController extends Controller {
    protected $cityService;

    public function __construct(CityService $service) {
        $this->cityService = $service;
    }

    public function index() {
        $cities = $this->cityService->getAllCities();
        return view('cities.index', compact('cities'));
    }

    public function show($id) {
        $city = $this->cityService->getCityById($id);
        return view('cities.show', compact('city'));
    }
}
