<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home.main');

//именнованные маршруты нужны для ссылок в layout
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'adminMethod'])->name('admin.main');

Route::get('catalog', [\App\Http\Controllers\CatalogController::class, 'catalogMethod'])->name('catalog.main');

Route::get('categories', [\App\Http\Controllers\CategoriesController::class, 'categoriesMethod'])->name('categories.main');



















//Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
//    Route::get('admin', 'index')->name('admin.index');
//});

//experiments
//Route::get('admin/getting', function () {
//    return 'Данные отправлены';
//});


//Route::get('admin', function () {
//    return view('admin', ['name' => 'Samantha']);
//});
//
//Route::get('CSRF', function () {
//    return ' X-CSRF-TOKEN: ---------- '.csrf_token();
//});
//
//Route::post('posting', function () {
//    return 'Данные приняты';
//});
