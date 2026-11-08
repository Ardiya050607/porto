<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/home');
})->name('home');
Route::get('/portofolio', function () {
    return view('layouts/portofolio');
})->name('portofolio');
