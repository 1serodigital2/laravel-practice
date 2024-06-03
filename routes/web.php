<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NightsaysController;
use App\Http\Controllers\PackagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about-us');

Route::get('/categories', [CategoryController::class, 'showCategory'])->name('categories');
Route::get('/nightstays', [NightsaysController::class, 'shownightstays'])->name('nightstays');
Route::get('/packages', [PackagesController::class, 'showPackages'])->name('packages');
Route::get('/category/{id}', [CategoryController::class, 'singleCategory'])->name('view.category');
Route::get('/nightstay/{id}', [NightsaysController::class, 'singleNightstay'])->name('view.nightstay');
Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('view.addCategory');
