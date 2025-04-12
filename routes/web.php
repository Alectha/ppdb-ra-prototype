<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formulirController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

// Register middleware aliases
Route::aliasMiddleware('admin', AdminMiddleware::class);

Route::get('/', function () {
    return view('ppdb.beranda');
});

Route::get('/tentang', function () {
    return view('ppdb.tentang');
});

Route::get('/formulir', [formulirController::class, 'formulir']);
Route::post('/formulir', [formulirController::class, 'submitForm'])->name('form.submit');

// Admin Routes
Route::redirect('/admin', '/admin/login');
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    
    Route::middleware(['auth', 'admin'])->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
