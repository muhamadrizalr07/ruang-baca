<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'tentang']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/kategori', [BukuController::class, 'kategori']);
Route::get('/buku/{id}', [BukuController::class, 'show']);
