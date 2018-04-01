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
Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/manage', 'MessagesController@getManage');
Route::get('/status', 'MessagesController@getStatus');
Route::post('contact/submit', 'MessagesController@submit');
Route::post('contact/update/{id}', 'MessagesController@store');
Route::get('contactEmail/confirm/{id}', 'MessagesController@confirm');
Route::get('delete/{id}', 'MessagesController@cancellation');
Route::get('/viewReservation/{id}', 'MessagesController@viewReservation');
Route::get('/thankyou/{id}', 'MessagesController@thankYou');
Route::get('/updateReservation/{id}', 'MessagesController@updateReservation');
Route::get('/deleteReservation/{id}', 'MessagesController@deleteReservation');
Route::get('/arriveReservation/{id}', 'MessagesController@arriveReservation');
Route::get('/notArriveReservation/{id}', 'MessagesController@notArriveReservation');
Route::get('/search', 'MessagesController@search');
Route::get('/searchStatus', 'MessagesController@searchStatus');
Route::get('/mess', 'MessagesController@index');
//Route::group(['prefix' => 'api'], function() {
  //Route::get('/manage', 'MessagesController@index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function() {
return view('welcome');
});
