<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\konsumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/aplikasi', [AplikasiController::class, 'aplikasi'])->name('aplikasi');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::resource('konsumen',konsumenController::class);
