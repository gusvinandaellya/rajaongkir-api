<?php

namespace App\Repositories;


use App\Models\Province;

class DatabaseProvinceRepository implements ProvinceRepository {
    public function getAllProvinces() {
        return Province::all();
    }

    public function getProvinceById($id) {
        return Province::find($id);
    }
}
