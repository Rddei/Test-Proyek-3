<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NotifikasiBaru;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    public function kirimEmail()
    {
        $targetEmail = 'fmy150504@gmail.com'; // Ganti dengan email tujuan
        Notification::route('mail', $targetEmail)->notify(new NotifikasiBaru());

        return back()->with('success', 'Email berhasil dikirim!');
    }
}
