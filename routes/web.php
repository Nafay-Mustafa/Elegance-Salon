<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
    Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.delete');
    Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin.appointments');
    Route::delete('/admin/appointments/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointments.delete');
    Route::get('/admin/feedbacks', [FeedbackController::class, 'index'])->name('admin.feedbacks');
    Route::delete('/admin/feedbacks/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.delete');
});
Route::get('/', function () {
    return view('user.index');
});
Route::get('/headerfooter', function () {
    return view('user.headerfooter');
});
Route::get('/contact', function () {
    return view('user.contact');
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
        return view('user.index');
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
Route::get('/services', function () {
    return view('user.services');
});

Route::get('/employeeform', function () {
    return view('user.employeeform');
});

Route::get('/menuupload', function () {
    return view('user.menuupload');
});
Route::get('/employeepanel', function () {
    return view('user.employeepanel');
});
// menu upload routes
Route::post('/menuupload' , [admincontroller::class, 'addMenu']);

Route::get('/menu', [usercontroller::class, 'showmenu'])->name('showmenu');

Route::get('/menutable' , [admincontroller::class, 'showmenutable']);
Route::get('/editmenu/{id}', [admincontroller::class, 'editmenu']);
Route::post('/updatemenu/{id}', [admincontroller::class, 'editmenulogic']);
Route::post('/deletemenu/{id}', [admincontroller::class, 'deletemenulogic']);
Route::post('/employeeform' , [admincontroller::class, 'addemployee']);

Route::get('/employeepanel' , [admincontroller::class, 'showemployee']);
Route::get('/contact', function () {
    return view('user.contact');
});

