<?php

use App\Http\Controllers\KnjiznicaController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::resource('knjige', KnjiznicaController::class);


