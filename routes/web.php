<?php

use App\Http\Controllers\Web\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index'])->name('web.contacts.index');
// Route::resource('contacts', ContactController::class);

Route::get('/', function () {
    return view('welcome');
});
