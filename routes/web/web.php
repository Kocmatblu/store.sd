<?php

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

Route::get('/home','HomeController@showHomePage');

Route::get('/categories', 'Category@showCategories');

Route::get('/product', function () {
    return view('product');
});


Route::get('/cart', function () {
    return view('checkout');
});


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('/register', 'Auth\RegisterController@setData')->name('createNewUser');
