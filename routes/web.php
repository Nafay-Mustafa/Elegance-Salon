<?php

use Illuminate\Support\Facades\Route;
use App\http\controller\admincontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.delete');

Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/admin/appointments', [AppointmentController::class, 'index'])->middleware('auth')->name('admin.appointments');
Route::delete('/admin/appointments/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointments.delete');

Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/feedbacks', [FeedbackController::class, 'index'])->name('admin.feedbacks');
    Route::delete('/admin/feedbacks/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.delete');
});
Route::get('/', function () {
    return view('user.index');
});
Route::get('/headerfooter', function () {
    return view('user.headerfooter');
});
Route::get('/booknow', function () {
    return view('user.booknow');
});
Route::get('/carousel', function () {
    return view('user.carousel');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        Route::get('/home', function () {
    return view('home');
});
    })->name('dashboard');
});

Route::get('/index', function () {
    return view('user.index');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/menu', function () {
    return view('user.menu');
});
Route::get('/review', function () {
    return view('user.review');
});
Route::get('/employee', function () {
    return view('user.employee');
});
Route::get('/contact', function () {
    return view('user.contact');
});
