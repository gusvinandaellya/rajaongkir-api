<?php

namespace App\Services;

use App\Repositories\ProvinceRepository;

class ProvinceService {
    protected $provinceRepository;

    public function __construct(ProvinceRepository $repository) {
        $this->provinceRepository = $repository;
    }

    public function getAllProvinces() {
        return $this->provinceRepository->getAllProvinces();
    }

    public function getProvinceById($provinceId) {
        return $this->provinceRepository->getProvinceById($provinceId);
    }
}
