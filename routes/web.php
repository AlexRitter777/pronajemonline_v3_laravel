<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notification/welcome', function () {
    $user = User::find(1);
    return (new \App\Notifications\NewUserGreetingNotification())
        ->toMail($user);
});


Route::get('/notification/confirm', function () {
    $user = User::find(1);
    return (new \App\Notifications\PasswordHasBeenResetNotification())
        ->toMail($user);
});

Route::get('/notification/reset', function () {

    $user = User::find(1);
    $token = Password::getRepository()->create($user);
    return (new \App\Notifications\MailResetPasswordToken($token))
        ->toMail($user);
});

Route::get('/notification/verify', function () {

    $user = User::find(1);

    return (new \App\Notifications\MailVerificationLink())
        ->toMail($user);
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'index']) ->name('account.dashboard');
    Route::get('user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('user/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

