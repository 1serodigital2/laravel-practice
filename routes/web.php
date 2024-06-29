<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NightstayController;
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

// Route::controller(NightstayController::class)->group(function () {
//     Route::get('/all-nightstays', 'allNightstays')->name('all.nightstays');
//     Route::get('/add-nightstay', 'showNightstayForm')->name('show.nightstayform');
//     Route::post('/nightstayform/{id?}', 'submitNightstayForm')->name('submit.nightstayform');
//     Route::get('/view-nightstay/{id}', 'viewNightstay')->name('view.nightstay');
//     Route::get('/delete-nightstay/{id}', 'deleteNightstay')->name('delete.nightstay');
// });

Route::resource('nightstays', NightstayController::class);
