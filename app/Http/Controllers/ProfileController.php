<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Data yang sebelumnya di web.php dipindahkan ke sini
        $data = [
            "name"    => "Zenny Nurul",
            "address" => "Salatiga",
            "email"   => "zenny.nurul@example.com",
            "univ"    => "UINSAGA"
        ];

        // Mengirimkan data ke view profile.blade.php
        return view('profile', compact('data'));
    }
}