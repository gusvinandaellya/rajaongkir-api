<?php

namespace App\Repositories;

interface ProvinceRepository {
    public function getAllProvinces();
    public function getProvinceById($id);
}
