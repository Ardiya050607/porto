<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/home', function () {
    return view('layouts/home');
})->name('home');
Route::get('/', function () {
    return view('layouts/loading');
})->name('loading');



