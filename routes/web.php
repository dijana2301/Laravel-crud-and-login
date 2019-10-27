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

// Club
Route::get('/clubs','ClubController@index');
Route::get('/newClub', 'ClubController@store');
Route::post('/newClub', 'ClubController@store')->name('createclub');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
