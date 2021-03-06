<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ============== Category Section ================ //

Route::get('/category/', 'CategoryController@index')->name('category.index');
Route::get('/category/add', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');

// ============== Category Section ================ //











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
