<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;

Route::get('/',[MainPageController::class,'index'])->name('home');
Route::get('/registration',[RegController::class,'registrationIndex'])->name('registrationIndex');
Route::get('/login',[LoginController::class,'LoginIndex'])->name('LoginIndex');
Route::post('/registrationStore',[RegController::class,'registrationStore'])->name('registrationStore');
Route::post('/LoginStore',[LoginController::class,'LoginStore'])->name('LoginStore');
