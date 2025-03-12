<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Partnership\PartnershipController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\PackageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes(['verify' => true]);

// Email Verification Routes
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Dashboard Routes with Middleware Protection
$dashboards = [
    'client' => ClientController::class,
    'partnership' => PartnershipController::class,
    'vendor' => VendorController::class,
];

foreach ($dashboards as $prefix => $controller) {
    Route::group(['prefix' => $prefix, 'middleware' => ['auth', 'verified']], function () use ($prefix, $controller) {
        Route::get('/dashboard', [$controller, "{$prefix}Dashboard"])->name("{$prefix}.dashboard");
    });
}
Route::group(['prefix' => 'category', 'middleware' => ['auth', 'verified']], function () {
    Route::get("/bank", [CategoryController::class, "bankIndex"])->name('bank.details');
    Route::get('/hospitality', [CategoryController::class, 'subcategoryHospitality'])->name('hospitality.details');
    Route::get('/hr', [CategoryController::class, 'subcategoryhr'])->name('hr.details');
    Route::get('/payroll', [CategoryController::class, 'subcategorypayroll'])->name('payroll.details');
    Route::get('/tax', [CategoryController::class, 'subcategorytax'])->name('tax.details');
    Route::get('/travel', [CategoryController::class, 'subcategorytravel'])->name('travel.details');
    Route::get('/vendor', [CategoryController::class, 'subcategoryvendor'])->name('vendor.details');
    Route::get('/health', [CategoryController::class, 'subcategoryhealth'])->name('health.details');
    Route::get('/training', [CategoryController::class, 'subcategorytraining'])->name('training.details');
});

// Admin Route
Route::get('/admin-login', [AdminLoginController::class, 'adminLogin'])->name('admin.login');
Route::post('/', [AdminLoginController::class, 'login'])->name('login.admin');
Route::middleware("auth")->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [AdminCategoryController::class, 'categoryIndex'])->name('category.index');
            Route::post('/store_category', [AdminCategoryController::class, 'StoreCategory'])->name('category.store');
            Route::get('/getcategory_detail', [AdminCategoryController::class, 'getCategoryInfor'])->name('category.fetch');
            Route::any('/update', [AdminCategoryController::class, 'updateCategory'])->name('category.update');
            Route::get('/delete', [AdminCategoryController::class, 'deleteCategory'])->name('category.delete');
        });
        Route::group(['prefix' => 'subcategory'], function () {
            Route::get('/', [AdminCategoryController::class, 'subcategoryIndex'])->name('subcategory.index');
            Route::post('/store_subcategory', [AdminCategoryController::class, 'storeSubCategory'])->name('Subcategory.store');
            Route::get('/getsubcategory_detail', [AdminCategoryController::class, 'getSubCategoryInfor'])->name('Subcategory.fetch');
            Route::any('/update', [AdminCategoryController::class, 'updateSubCategory'])->name('Subcategory.update');
            Route::get('/delete', [AdminCategoryController::class, 'deleteSubCategory'])->name('Subcategory.delete');
        });
        Route::group(['prefix' => 'package'], function () {
            Route::get('/', [PackageController::class, 'package'])->name('package.page');
            Route::post('/store_package', [PackageController::class, 'storePackageIndex'])->name('package.store');
            Route::get('/getpackage_detail', [PackageController::class, 'getPackageInfor'])->name('package.fetch');
            Route::any('/update', [PackageController::class, 'updatePackage'])->name('package.update');
            Route::get('/delete', [PackageController::class, 'deletePackage'])->name('category.delete');
        });
    });
});

// Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin-logout', [AdminLoginController::class, 'AdminLogout'])->name('admin-logout');

// Maintenance Routes - Only in Local Environment
if (app()->environment('local')) {
    Route::get('/clear-cache', function () {
        Artisan::call('config:clear');
        return 'Config cache cleared';
    });

    Route::get('/clear-route', function () {
        Artisan::call('route:clear');
        return 'Route cache cleared';
    });

    Route::get('/clear-view', function () {
        Artisan::call('view:clear');
        return 'View cache cleared';
    });

    Route::get('/clear-laravel-log-file', function () {
        File::cleanDirectory(storage_path('logs'));
        return 'Log files deleted';
    });
}
