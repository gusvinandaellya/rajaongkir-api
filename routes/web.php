<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/provinces', [App\Http\Controllers\RajaOngkirController::class, 'getProvinces']);
//Route::get('/cities', [App\Http\Controllers\RajaOngkirController::class, 'getCities']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('/provinces', [App\Http\Controllers\ProvinceController::class, 'index'])->name('provinces.index');
    Route::get('/provinces/{id}', [App\Http\Controllers\ProvinceController::class, 'show'])->name('provinces.show');
    Route::get('/cities', [App\Http\Controllers\CityController::class, 'index'])->name('cities.index');
    Route::get('/cities/{id}', [App\Http\Controllers\CityController::class, 'show'])->name('cities.show');
});
