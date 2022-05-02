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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'Admin\NewsController@create'); # 追記
});


// PHP/Laravel 09 Routingについて理解する　応用課題
Route::group(['prefix' => 'admin'], function() {
  Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
  Route::post('profile/create', 'Admin\ProfileController@create'); # 追記
  Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
  Route::post('profile/edit', 'Admin\ProfileController@create'); # 追記
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
