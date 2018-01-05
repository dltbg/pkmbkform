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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('new_participant', ['as'=>'new_participant', 'uses'=>'FormController@register']);
Route::any('dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);
Route::get('/', ['as'=>'/', 'uses'=>'FormController@index']);

//Route::get('login', ['as'=>'login', 'uses'=>'LoginController@index']);
//Route::post('login', ['as'=>'login', 'uses'=>'LoginController@login']);
//Route::get('logout', ['as'=>'logout', 'uses'=>'LoginController@logout']);