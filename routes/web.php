<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('welcome');
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
Route::get('/services', function () {
    return view('user.services');
});
Route::get('/review', function () {
    return view('user.review');
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

Route::post('/menuupload' , [admincontroller::class, 'addMenu']);

Route::get('/menu', [usercontroller::class, 'showmenu'])->name('showmenu');

Route::post('/employeeform' , [admincontroller::class, 'addemployee']);

Route::get('/employeepanel' , [admincontroller::class, 'showemployee']);
Route::post('/deleteemployee/{id}' , [admincontroller::class, 'deleteemployee']);