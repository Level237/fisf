<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;

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

Route::prefix('actualites')->group(function () {
    Route::get('/', function () {
        return view('news.index');
    })->name('news.index');
    
    Route::get('/annonces', function () {
        return view('news.announcements');
    })->name('news.announcements');
    Route::get('/medias', function () {
        return view('news.media');
    })->name('news.media');
    Route::get('/publications', function () {
        return view('news.publications');
    })->name('news.publications');
});


