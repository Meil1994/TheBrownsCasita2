<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBooking;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminFeedbackController;


Route::get('/', [HomeController::class, 'home']);

Route::post('/feedbacks', [HomeController::class, 'feedback'])->middleware('auth');


Route::get('/facility', [FacilityController::class, 'facility']);

Route::post('/feedbacks/facility', [FacilityController::class, 'feedbackFacility'])->middleware('auth');


Route::get('/calendar', [CalendarController::class, 'calendar']);

Route::post('/feedbacks/calendar', [CalendarController::class, 'feedbackCalendar'])->middleware('auth');



Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/message/contact', [ContactController::class, 'messageContact']);

Route::post('/feedbacks/contact', [ContactController::class, 'feedbackContact'])->middleware('auth');




Route::match(['get', 'post'], '/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('auth');

Route::get('/bookings', [CheckoutController::class, 'book'])->middleware('auth');

Route::post('/bookings', [CheckoutController::class, 'book'])->middleware('auth');

Route::get('/booking/success', [CheckoutController::class, 'success'])->middleware('auth');



Route::get('/register', [UserController::class, 'register']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/my/profile', [UserController::class, 'manage'])->middleware('auth');

Route::get('/my/profile/edit', [UserController::class, 'editfile'])->middleware('auth');

Route::put('/my/profile/edit', [UserController::class, 'update'])->name('my.profile.update');

Route::get('/my/profile/feedback', [UserController::class, 'profileFeedback'])->middleware('auth');

Route::post('/feedbacks/profile', [UserController::class, 'feedbackProfile'])->middleware('auth');


Route::get('/message', [ChatController::class, 'messageUI'])->middleware('auth');

Route::post('/profile/message', [ChatController::class, 'messageProfile'])->middleware('auth');








Route::get('/admin', [AdminController::class, 'adminDashboard']);

Route::get('/totaluser', [AdminController::class, 'adminTotalUser']);

Route::get('/pricing', [AdminController::class, 'pricing']);

Route::put('/pricing/edit', [AdminController::class, 'updatePrice']);

Route::get('/email/{messages}/', [AdminController::class, 'emailResponse']);

Route::post('/admin/messages/{message}/respond', 'Admin\AdminController@sendResponse')->name('admin.message.response.send');

Route::get('/send/email', [AdminController::class, 'messageAdmin']);

Route::get('/admin/users', [AdminController::class, 'AdmintotalUser'])->name('admin.users.index');

Route::get('/admin/bookings', [AdminBooking::class, 'AdmintotalBooking'])->name('admin.bookings.index');

Route::get('/email', [ChatController::class, 'AdmintotalMessages'])->name('admin.messages.index');

Route::get('/customer/feedback', [AdminFeedbackController::class, 'AdmintotalFeedback'])->name('admin.feedback.index');

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm']);

Route::post('/admin/authenticate', [AdminLoginController::class, 'adminAuthenticate'])->middleware('guest');


Route::put('/admin/edit', [AdminEditController::class, 'adminEdit'])->name('my.admit.edit');




Route::fallback(function () {
    return redirect('/');
});

Route::any('/{any}', function () {
    return redirect('/');
})->where('any', '.*');





