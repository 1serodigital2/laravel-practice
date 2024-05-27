<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NightsaysController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about-us');

Route::get('/categories', [CategoryController::class, 'showCategory'])->name('categories');
Route::get('/nightstays', [NightsaysController::class, 'shownightstays'])->name('nightstays');
