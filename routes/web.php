<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-page', [TestController::class, 'first']);

Route::get('/second-page', [TestController::class, 'second']);

Route::get('/', [MainController::class, 'showIndex'])-> name('home');

Route::get('/array', [MainController::class, 'showArray']);