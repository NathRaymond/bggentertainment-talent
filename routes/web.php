<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]); // Ensure email verification is enabled

// Redirect to email verification if user is not verified
Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

// Middleware for client dashboard
// Route::middleware(['auth', 'verified', 'role:client'])->group(function () {
//     Route::get('/client/dashboard', [App\Http\Controllers\Client\ClientController::class, 'index'])
//         ->name('client.dashboard');
// });

// Route::middleware(['auth', 'verified', 'role:freelancer'])->group(function () {
//     Route::get('/freelancer/dashboard', [App\Http\Controllers\Freelancer\FreelancerController::class, 'index'])
//         ->name('freelancer.dashboard');
// });

