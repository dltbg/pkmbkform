
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
Route::any('/verified/{nrp}', 'DashboardController@verified')->name('verified');
Route::any('/unverified/{nrp}', 'DashboardController@unverified')->name('unverified');

Route::any('assign', ['as'=>'assign', 'uses'=>'CampController@assignBus']);
Route::any('absen', ['as'=>'absen', 'uses'=>'CampController@absen']);
Route::any('getAbsensi', ['as'=>'getAbsensi', 'uses'=>'CampController@getAbsensi']);

Route::post('new_participant', ['as'=>'new_participant', 'uses'=>'FormController@register']);
// Route::any('new_participant', function () { return redirect()->route('/'); });
Route::any('dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);
Route::get('/', ['as'=>'/', 'uses'=>'IndexController@index']);
Route::get('/form', ['as'=>'/form', 'uses'=>'FormController@index']);