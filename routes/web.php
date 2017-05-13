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
Route::get('/home', 'HomeController@index');


Route::get('/', function () {
    return view('frontend.master');
});
Route::get('contact', function () {
    return view('frontend.blocks.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('authen/login', ['as' => 'getlogin', 'uses' => 'ThanhVienController@getLogin']);
// Route::post('authen/login', ['as' => 'postlogin', 'uses' => 'ThanhVienController@postLogin']);

Route::get('authentication/getLogin', ['as' => 'getLogin', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('authentication/postLogin', ['as' => 'postLogin', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('authentication/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//Backend
Route::get('backend/index', ['as' => 'backend', 'uses' => 'ThanhVienController@test']);
//Categoty
Route::resource('category-list', 'CategoryController');
Route::get('sua', 'CategoryController@edit');
Route::get('xem', 'CategoryController@xem');
//Color
Route::resource('color-list', 'ColorController');
Route::get('sua-color', 'ColorController@edit');
Route::get('xem-color', 'ColorController@xem');
//Size
Route::resource('size-list', 'SizeController');
Route::get('sua-size', 'SizeController@edit');
Route::get('xem-size', 'SizeController@xem');
//Payment
Route::resource('Payment', 'PaymentController');
//Login /Logout
Route::get('auth/get-login', [
    'as' => 'getLogin',
    'uses' => 'Auth\LoginController@getLogin'
]);
Route::post('auth/post-login', [
    'as' => 'postLogin',
    'uses' => 'Auth\LoginController@postLogin'
]);
Route::get('auth/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);
//Reset Password
Route::get('auth/reset', [
    'as' => 'Reset',
    'uses' => 'Auth\ForgotPasswordController@getEmail'
]);
//Register
Route::get('auth/register', [
    'as' => 'Register',
    'uses' => 'Auth\RegisterController@getRegiter'
]);
//Login Facebook 
Route::get('redirect', 'Auth\LoginController@redirectToProvider');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/', 'HomeController@index');
