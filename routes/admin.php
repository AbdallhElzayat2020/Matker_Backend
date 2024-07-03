<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminBoxController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminOrderController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    //Auth Routes
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');

    Route::post('login', [AdminAuthController::class, 'handleLogin'])->name('handle-login');

    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});

// Protected Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route Categories
    Route::resource('category', CategoryController::class);
    // Route Products
    Route::resource('product', ProductController::class);
    // Route Orders
    Route::resource('order', AdminOrderController::class);
    // Route Boxes
    Route::resource('boxs', AdminBoxController::class);
    // Route update Status
    Route::get('order/update-status/{id}/{status}', [AdminOrderController::class, 'updateStatus'])->name('order.updateStatus');
//Route company footer
    Route::resource('company', CompanyController::class);
});
