<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PendaftarController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran/sukses', [PendaftaranController::class, 'sukses'])->name('pendaftaran.sukses');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::prefix('admin')->group(function () {
    // setting
    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('admin.settings.update');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('admin.pendaftar.index');
    Route::get('/pendaftar/{id}', [PendaftarController::class, 'show'])->name('admin.pendaftar.show');
    Route::get('/pendaftar/{id}/edit', [PendaftarController::class, 'edit'])->name('admin.pendaftar.edit');
    Route::put('/pendaftar/{id}', [PendaftarController::class, 'update'])->name('admin.pendaftar.update');
    Route::delete('/pendaftar/{id}', [PendaftarController::class, 'destroy'])->name('admin.pendaftar.destroy');

    // Admin Authentication Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
