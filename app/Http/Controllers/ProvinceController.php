<?php

namespace App\Http\Controllers;

use App\Services\ProvinceService;

class ProvinceController extends Controller {
    protected $provinceService;

    public function __construct(ProvinceService $service) {
        $this->provinceService = $service;
    }

    public function index() {
        $provinces = $this->provinceService->getAllProvinces();

        return view('provinces.index', compact('provinces'));
    }

    public function show($id) {
        $province = $this->provinceService->getProvinceById($id);

        return view('provinces.show', compact('province'));
    }
}
