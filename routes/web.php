<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Admin\NominalValueController;

use App\Http\Controllers\WaterPaymentController;
use App\Http\Controllers\DetailPaymentLists;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

/* DASHBOARD */
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

/* NOTED */
Route::resource('/noted', WaterPaymentController::class)->middleware('role:noted');


/* CASHHER */
Route::resource('/casher', WaterPaymentController::class)->middleware('role:casher');


/* ADMIN ROUTE */
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->middleware('role:admin');
/* WATER PAYMENT */
Route::resource('/admin/water-payment', WaterPaymentController::class)->middleware('role:admin');
/* MASTER ROUTE */
Route::resource('/admin/nominal-value', NominalValueController::class)->middleware('role:admin');
Route::resource('/admin/user-list', UserListController::class)->middleware('role:admin');

Route::resource('/detail_payment_lists', DetailPaymentLists::class);