<?php

use Illuminate\Support\Facades\Route;

// Jika user membuka halaman awal (/)
Route::get('/', function () {
    return view('home'); 
});

// Jika user mengetik /profile
Route::get('/profile', function () {

    $data = [
        "name" => "Zenny Nurul",
        "address" => "Salatiga",
        "email" => "zenny.nurul@example.com",
        "univ"=> "UINSAGA"
    ];
    return view('profile', compact('data'));
});

// Jika user mengetik /articles (Ini fokus utama tugasmu)
Route::get('/articles', function () {
    return view('articles');
});

// Jika user mengetik /contact
Route::get('/contact', function () {
    return view('contact');
});