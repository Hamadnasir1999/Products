<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('customers/highest-spending', [CustomerController::class, 'highestSpendingCustomer'])->name('customers.highestSpending');
Route::get('customers/highest-order-count', [CustomerController::class, 'highestOrderCountCustomer'])->name('customers.highestOrderCount');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
