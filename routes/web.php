<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\apotekController;
use App\Http\Controllers\HospitalController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pasiens', PasienController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('apoteks', apotekController::class);
Route::resource('hospitals', HospitalController::class);
