<?php

use App\Http\Controllers\KnjiznicaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pocetna');
});

Route::resource('knjige', KnjiznicaController::class);

Route::get('search', [KnjiznicaController::class, 'search'])->name('search');

Route::get('/o-nama', function () {
    return view('onama');
});


