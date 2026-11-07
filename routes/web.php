<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/home');
})->name('home');
Route::get('/maintenance', function () {
    return view('layouts/maintenance');
})->name('maintenance');
