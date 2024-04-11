<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/aplikasi', [AplikasiController::class, 'aplikasi'])->name('aplikasi');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::prefix('consumers')->group(function () {
    Route::get('/', [ConsumerController::class, 'index'])->name('consumers.index');
    Route::get('/create', [ConsumerController::class, 'create'])->name('consumers.create');
    Route::post('/store', [ConsumerController::class, 'store'])->name('consumers.store');
    Route::get('/{consumer}', [ConsumerController::class, 'show'])->name('consumers.show');
    Route::get('/{consumer}/edit', [ConsumerController::class, 'edit'])->name('consumers.edit');
    Route::put('/{consumer}', [ConsumerController::class, 'update'])->name('consumers.update');
    Route::delete('/{consumer}', [ConsumerController::class, 'destroy'])->name('consumers.destroy');
});
