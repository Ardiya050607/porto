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
    // Validasi data input dari form
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    // Mengirim email langsung ke ardiyadev123@gmail.com
    Mail::raw(
        "Pesan baru diterima dari website portofolio:\n\n" .
        "Nama: {$validated['name']}\n" .
        "Email: {$validated['email']}\n" .
        "Telepon: " . ($validated['number'] ?? '-') . "\n\n" .
        "Pesan:\n{$validated['message']}", 
        function ($message) use ($validated) {
            $message->to('ardiyadev123@gmail.com')
                    ->subject('Pesan Kontak Baru dari: ' . $validated['name'])
                    ->replyTo($validated['email']);
        }
    );

    return back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim.');
})->name('contact.send');