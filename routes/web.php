<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    //app()->setLocale('ru');
    return  view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'category'])->name('categories.show');


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{slug}', [ContactController::class, 'show'])->name('contact.show');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return "Admin Dashboard";
    })->name('dashboard');

    Route::get('/users', function () {
        return "Admin Users";
    })->name('users.index');
    Route::get('/params', function () {
        return "Admin Params";
    })->name('params.index');
    Route::get('/companies', function () {
        return "Admin Companies";
    })->name('companies.index');


    Route::get('/items', function () {
        return "Admin Items";
    })->name('items.index');
});
