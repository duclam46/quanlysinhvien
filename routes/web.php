<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhvienController;

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('sinhvien', SinhvienController::class);