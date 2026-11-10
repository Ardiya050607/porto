<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('layouts/home');
})->name('home');
Route::get('/portofolio', function () {
    return view('layouts/portofolio');
})->name('portofolio');
