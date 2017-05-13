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

Route::get('/', 'HomeController@index');
Route::post('/language', 'LanguageController@changeLanguage');

Route::get('backend', 'BlocksController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('authen/login', ['as' => 'getlogin', 'uses' => 'ThanhVienController@getLogin']);
// Route::post('authen/login', ['as' => 'postlogin', 'uses' => 'ThanhVienController@postLogin']);

Route::get('authentication/getLogin', ['as' => 'getLogin', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('authentication/postLogin', ['as' => 'postLogin', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('authentication/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//Backend
Route::get('contact', ['as' => 'frontend', 'uses' => 'BlocksController@contact']);
Route::get('about', ['as' => 'frontend', 'uses' => 'BlocksController@about']);
//Categoty
Route::resource('category-list', 'CategoryController');
Route::get('sua', 'CategoryController@edit');
Route::get('xem', 'CategoryController@xem');

Route::get('frontend', 'CategoryController@frontend');

//Color
Route::resource('color-list', 'ColorController');
Route::get('sua-color', 'ColorController@edit');
Route::get('xem-color', 'ColorController@xem');
//Size
Route::resource('size-list', 'SizeController');
Route::get('sua-size', 'SizeController@edit');
Route::get('xem-size', 'SizeController@xem');
 //Route::post('/language-chooser', 'LanguageController@changeLanguage');
//Payment
Route::resource('Payment', 'PaymentController');
