<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaymentController::class, 'index'])->name('index');
Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::get('/success', [PaymentController::class, 'success'])->name('success');

//for stripe configuration from admin dashboard
Route::get('/config', [ConfigController::class, 'showConfigForm'])->name('config.show');
Route::post('/config', [ConfigController::class, 'updateConfig'])->name('config.update');


Route::get('/admin/transactions', [PaymentController::class, 'showTransactionHistory'])->name('admin.transactions');
