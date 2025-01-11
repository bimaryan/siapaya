<?php

use App\Http\Controllers\WEb\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\WEb\Admin\PenggunaController;
use App\Http\Controllers\WEb\Auth\LoginController;
use App\Http\Controllers\WEb\Auth\LogoutController;
use App\Http\Controllers\WEb\Auth\RegisterController;
use App\Http\Controllers\WEb\Pengguna\DashboardController;
use App\Http\Controllers\WEb\Pengguna\PesanController;
use App\Http\Controllers\WEb\Pengguna\SemuaPesanController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('masuk', LoginController::class);
Route::resource('daftar', RegisterController::class);

Route::middleware('auth:admin')->group(function () {
    // ROUTE ADMIN
    Route::resource('dashboard-admin', AdminDashboardController::class);
    Route::resource('pengguna', PenggunaController::class);

    Route::resource('keluar', LogoutController::class);
});

Route::middleware('multiGuard:web')->group(function () {
    // ROUTE PENGGGUNA
    Route::resource('keluar', LogoutController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('semua-pesan', SemuaPesanController::class);
});

Route::get('/{name}', [PesanController::class, 'index'])->name('Pesan.index');
Route::put('/{name}/posting', [PesanController::class, 'update'])->name('Pesan.update');
