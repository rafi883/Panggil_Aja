<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;

// Login & Register
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Services (User lihat layanan)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Cart (User)
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{service_id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

// Admin Cart (Dashboard)
Route::get('/admin/carts', [CartController::class, 'adminIndex'])->name('admin.carts');

// Admin Checkout
Route::get('/admin/checkouts', [CheckoutController::class, 'adminIndex'])->name('admin.checkouts');
Route::post('/admin/checkouts/{id}/status', [CheckoutController::class, 'updateStatus'])->name('admin.checkout.status');

// Contact Us
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/admin/contact', [ContactController::class, 'adminIndex'])->name('admin.contact');
