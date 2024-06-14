<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(CategoryController::class)->group(function () {
    Route::get('/all-categories', 'allCategories')->name('view.categories');
    Route::get('/category/{id}', 'viewCategory')->name('view.category');
    Route::post('/add-category', 'addCategory')->name('add.category');
    Route::post('/update-categorydata/{id}', 'updateCategorydata')->name('update.categorydata');
    Route::get('/update-category/{id}', 'updateCategory')->name('update.category');
    Route::get('/delete-category/{id}', 'deleteCategory')->name('delete.category');
});
Route::view('add-category', '/addcategory');
