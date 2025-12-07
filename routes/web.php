<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderitemController;
use App\Http\Controllers\AdminController;

// Login & Register
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/order/{id}', [AdminController::class, 'showOrder'])->name('admin.order.detail');

//about
Route::get('/about', [DashboardController::class, 'about'])->name('about');
// Services (User lihat layanan)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

//detail service
Route::get('/detailService', [DetailServiceController::class, 'index'])->name('detailService');
Route::get('/service/{id}', [DetailServiceController::class, 'detail'])->name('service.detail');


// Cart (User)
Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang.index');
Route::post('/cart/add/{service_id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.process');


// Admin Cart (Dashboard)
Route::get('/admin/carts', [CartController::class, 'adminIndex'])->name('admin.carts');

// Admin Checkout
Route::get('/admin/checkouts', [CheckoutController::class, 'adminIndex'])->name('admin.checkouts');
Route::post('/admin/checkouts/{id}/status', [CheckoutController::class, 'updateStatus'])->name('admin.checkout.status');

// Contact Us
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/admin/contact', [ContactController::class, 'adminIndex'])->name('admin.contact');

//Detail pesanan user
Route::get('/order', [OrderController::class, 'index'])->name('detail.pesanan');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.detail');

Route::post('/order-item/update-status', [OrderItemController::class, 'updateStatus'])->name('order-item.update-status');



