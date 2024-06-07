<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'index']) ->name('account.dashboard');
    Route::get('user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('user/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
