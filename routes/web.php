<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [WebController::class, 'home'])->name('app_home');
Route::get('add-category', [CategoryController::class, 'showCategory'])->name('add-category');
Route::post('save-category', [CategoryController::class, 'saveCategory'])->name('save-category');
Route::get('categories', [CategoryController::class, 'allCategories'])->name('all-categories');

Route::get('edit-category/{id}', [CategoryController::class, 'showEditCategory'])->name('edit-category');
Route::put('edit-category/{id}', [CategoryController::class, 'saveEditCategory'])->name('edit-category');
Route::delete('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
//Products Route
Route::resource('product', ProductController::class);
// Route::put('edit-product/{id}', [ProductController::class, 'update'])->name('edit-product');
// Route::delete('delete-product/{id}', [ProductController::class, 'deleteCategory'])->name('deleteProduct');
//Authetification
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Personne Table Route
Route::resource('personnes', PersonneController::class);
