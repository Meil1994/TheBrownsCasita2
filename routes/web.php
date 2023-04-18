<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;



Route::get('/', [HomeController::class, 'home']);

Route::get('/facility', [FacilityController::class, 'facility']);

Route::get('/calendar', [CalendarController::class, 'calendar']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::match(['get', 'post'], '/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('auth');


Route::get('/bookings', [CheckoutController::class, 'book'])->middleware('auth');

Route::get('/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/my/profile', [UserController::class, 'manage'])->middleware('auth');

Route::get('/my/profile/edit', [UserController::class, 'editfile'])->middleware('auth');

Route::put('/my/profile/edit', [UserController::class, 'update'])->name('my.profile.update');

Route::get('/message', [UserController::class, 'messages']);



Route::post('/bookings', [CheckoutController::class, 'book'])->middleware('auth');

Route::get('/booking/success', [CheckoutController::class, 'success'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'adminDashboard']);

Route::get('/totaluser', [AdminController::class, 'adminTotalUser']);

Route::get('/totalsales', [AdminController::class, 'adminTotalSales']);

Route::get('/booking', [AdminController::class, 'adminBooking']);

Route::fallback(function () {
    return redirect('/');
});

Route::any('/{any}', function () {
    return redirect('/');
})->where('any', '.*');





