<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home')->name('tienda');
Route::get('admin', 'PagesController@admin')->name('admin')->middleware('auth');

Route::resource('products', 'ProductsController', ['except' => ['show', 'index'] ] )->middleware('auth');

// Authentication Routes ...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
