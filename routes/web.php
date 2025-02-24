<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/kirim-email', function () {
    Log::info('Route /kirim-email dijalankan.');
    Mail::raw('Ini adalah email notifikasi dari Laravel.', function ($message) {
        $message->to('fmy150504@gmail.com')
                ->subject('Notifikasi Baru');
    });

    return back()->with('success', 'Email berhasil dikirim!');
})->name('kirim.email');
