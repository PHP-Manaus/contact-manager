<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


// Route::resource('contacts', ContactController::class);

Route::get('/', function () {
    return view('welcome');
});
