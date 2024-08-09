<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('main');


Route::middleware('auth', 'verified')->group(function () {

    // Route::get('tamu', function () {
    //     return view('tamu');
    // })->name('tamu');

    Route::get('arsip', [ArsipController::class, 'edit'])->name('arsip.form');
    Route::put('arsip', [ArsipController::class, 'update'])->name('arsip.update');
    Route::get('arsip-surat', [ArsipController::class, 'arsip_surat'])->name('arsip.surat');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::get('agenda', AgendaController::class)->name('agenda');