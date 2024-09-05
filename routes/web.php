<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CampusIdentityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});




Route::get('admin', AdminPageController::class)->name('admin')->middleware('guest');

Route::resource('campus-identity', CampusIdentityController::class)->middleware('guest');

Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');


