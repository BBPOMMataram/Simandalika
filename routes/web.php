<?php

use App\Http\Controllers\ArsipController;
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
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', function(){
    return view('chart.dashboard');
})->name('dashboard');

Route::get('testing', function(){

    return view('testing');
});

Route::get('api/users', function() {
    return User::paginate(3);
});
