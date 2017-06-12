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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first', 'first@index');
Route::post('first/add', 'first@add');

Route::get('/front', 'FrontController@index');
Route::post('front/add', 'FrontController@add');
Route::post('front/login', 'FrontController@login');

Route::group(['middleware' => 'check_login'], function () {
    Route::get('front/dashboard', 'FrontController@dashboard');
    Route::get('front/logout', 'FrontController@logout');
});
//Route::get('front/dashboard', 'FrontController@dashboard');

Auth::routes();
//Route::get('/login', array('as' => 'login', 'uses' => 'Auth\LoginController'));
//Route::post('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin'));
Route::get('/logout', 'Dashboard@logout');
Route::get('/dashboard', 'Dashboard@index');
Route::get('/home', 'HomeController@index')->name('home');
