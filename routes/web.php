<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/about', function () {
    return view('about');
});
Route::get('/partners', function () {
    return view('partners');
});
