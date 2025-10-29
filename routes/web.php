<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RegController;

Route::get('/',[MainPageController::class,'index'])->name('home');
Route::get('/registration',[RegController::class,'registrationIndex'])->name('registrationIndex');
Route::post('/registrationStore',[RegController::class,'registrationStore'])->name('registrationStore');
