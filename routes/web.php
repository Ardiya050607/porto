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
Route::post('/contact', function (Request $request) {
    // Validasi input dari form
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    // Kirim email (menggunakan penutupan/closure atau Mail Class)
    Mail::raw("Nama: {$validated['name']}\nEmail: {$validated['email']}\nTelepon: {$validated['number']}\n\nPesan:\n{$validated['message']}", function ($message) use ($validated) {
        $message->to('email-pribadianda@gmail.com') // Ganti dengan email pribadi Anda
                ->subject('Pesan Baru dari Website: ' . $validated['name'])
                ->replyTo($validated['email']);
    });

    return back()->with('success', 'Pesan Anda berhasil dikirim!');
})->name('contact.send');
