<?php

use App\Http\Controllers\CateringController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route login/logout (register & reset password dimatikan)
Auth::routes([
    'register' => false,
    'reset'    => false,
]);

Route::get('/', function () {
    return redirect()->route('catering');
});

// ===== Halaman publik =====
Route::get('/catering', [CateringController::class, 'index'])->name('catering');
Route::get('/catering/menu/{kategori}', [CateringController::class, 'show'])->name('menu.show');

// ===== Halaman admin (wajib login) =====
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/data-menu', [CateringController::class, 'dataMenu'])->name('data-menu');
    Route::get('/data-menu/create', [CateringController::class, 'create'])->name('menu.create');
    Route::post('/data-menu', [CateringController::class, 'store'])->name('menu.store');
    Route::get('/data-menu/{id}/edit', [CateringController::class, 'edit'])->name('menu.edit');
    Route::post('/data-menu/{id}', [CateringController::class, 'update'])->name('menu.update');
    Route::delete('/data-menu/{id}', [CateringController::class, 'destroy'])->name('menu.destroy');
});