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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'TopController@index')->name('home');

Route::get('hello', 'HelloController@index');
Route::get('/products/', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create')->middleware('auth');
Route::post('/products/create/confirm', 'ProductsController@confirm')->middleware('auth');
Route::post('/products/', 'ProductsController@store')->middleware('auth');
Route::delete('/products/{id}', 'ProductsController@destroy');
Route::get('/products/{id}', 'ProductsController@show');
Route::get('/products/category/{id}', 'ProductsController@category');


Auth::routes();

Route::get('/users/', 'UsersController@index')->middleware('auth');
Route::get('/users/renting', 'UsersController@renting')->middleware('auth');
Route::get('/users/listing', 'UsersController@listing')->middleware('auth');
Route::get('/users/money', 'UsersController@money')->middleware('auth');
Route::get('/users/{id}', 'UsersController@show');

Route::get('/home', 'TopController@index')->name('home');
Route::get('/howto', 'TopController@howto');
Route::get('/terms', 'TopController@terms');

Route::get('/reservation/{id}', 'ReservationsController@show')->middleware('auth');
Route::post('/reservation/reserve/{id}', 'ReservationsController@store')->middleware('auth');

Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');

Route::get('/contact', 'ContactController@form');
Route::post('/contact/confirm', 'ContactController@confirm');
Route::post('/contact/process', 'ContactController@process');

Route::get('/transfer', 'TransferController@form');
Route::post('/transfer/confirm', 'TransferController@confirm');
Route::post('/transfer/process', 'TransferController@process');


