<?php

use App\Http\Controllers\Web\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index'])->name('web.contacts.index');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('web.contacts.show');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('web.contacts.destroy');
// Route::resource('contacts', ContactController::class);

Route::get('/', function () {
    return view('welcome');
});
