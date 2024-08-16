<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SitesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', FrontController::class)->name('main');
Route::get('/visit-link/{site}', [SiteController::class, 'visit_link'])->name('visit-link');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('sites', SiteController::class);

    // Route::get('tamu', function () {
    //     return view('tamu');
    // })->name('tamu');

    Route::get('arsip', [ArsipController::class, 'edit'])->name('arsip.form');
    Route::put('arsip', [ArsipController::class, 'update'])->name('arsip.update');
    Route::get('arsip-surat', [ArsipController::class, 'arsip_surat'])->name('arsip.surat');

    Route::get('import-agenda', [AgendaController::class, 'import_agenda'])->name('agenda.import');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::get('agenda', AgendaController::class)->name('agenda');
