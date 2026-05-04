<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Rute Home menggunakan welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// Rute Katalog Artikel (Halaman Terpisah yang memanggil data database)
Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/{id}', [ArticleController::class, 'show']);
Route::put('/edit-article/{id}', [ArticleController::class, 'update']);

// Rute Statis untuk Profil dan Kontak
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Rute Fungsionalitas CRUD Artikel
Route::get('/create-article', [ArticleController::class, 'create']);
Route::post('/create-article', [ArticleController::class, 'store']);
Route::get('/edit-article/{id}', [ArticleController::class, 'edit']);
Route::put('/edit-article/{id}', [ArticleController::class, 'update']);
Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy']);