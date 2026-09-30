<?php

use Illuminate\Support\Facades\Route;
use App\http\controller\admincontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/headerfooter', function () {
    return view('user.headerfooter');
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

