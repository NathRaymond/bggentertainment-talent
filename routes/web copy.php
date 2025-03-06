<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Freelancer\Controller;
use App\Http\Controllers\Freelancer\FreelancerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]); // Ensure email verification is enabled


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index']);
// });

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', [ClientController::class, 'index'])
            ->middleware(['auth', 'verified'])
            ->name('dashboard');
    });
});

Route::middleware(['auth', 'role:freelancer'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', [FreelancerController::class, 'index'])
            ->middleware(['auth', 'verified'])
            ->name('dashboard');
    });
});

// Route::get('/admin-logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
// Route::get('/clear-cache', function () {
//     $exitCode = Artisan::call('config:clear');

//     return $exitCode;
// });
Route::get('/clear-route', function () {
    $exitCode = Artisan::call('route:clear');

    return $exitCode;
});

Route::get('/clear-view', function () {
    $exitCode = Artisan::call('view:clear');

    return $exitCode;
});

Route::get('/clear-laravel-log-file', function () {
    exec('rm -f ' . storage_path('logs/*.log'));
    exec('rm -f ' . base_path('*.log'));

    return 'Log file deleted';
});
