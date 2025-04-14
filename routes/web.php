<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (Frontend)
Route::get('/', [TemplateController::class, 'index']);

// Route untuk halaman dashboard admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});
