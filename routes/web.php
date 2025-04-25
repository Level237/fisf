<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;

Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');
Route::get('/', function () {
    return view('Homepage');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/a-propos', function () {
    return view('about');
})->name('about');
Route::get('/partners', function () {
    return view('partners');
})->name('partners');
Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get("organes", function () {
    return view('organes');
})->name('organes');
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

Route::get('/presse-medias', function () {
    return view('presse-medias');
})->name('presse-medias');

Route::get('/epreuves', function () {
    return view('competitions.epreuves');
})->name('epreuves');


