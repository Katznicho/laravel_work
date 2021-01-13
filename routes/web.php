<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterHealthOfficer;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/registerofficer', [RegisterHealthOfficer::class,'index'])->name('registerofficer');
Route::post('/registerofficer', [RegisterHealthOfficer::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

