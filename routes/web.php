<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Wajib dipanggil

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });

// Rute CRUD Produk
Route::get('/products', [ProductController::class, 'index']); // Menampilkan semua produk
Route::get('/create-product', [ProductController::class, 'create']); // -> RUTE BARU: Menampilkan halaman form
Route::post('/create-product', [ProductController::class, 'store']); // Memproses form
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('/edit-product/{id}', [ProductController::class, 'update']);
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);