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

Route::get('/home', 'PunchController@view')->name('home');

Route::get('/', 'PunchController@view')->name('root');

// punch start------
Route::get("/punch/view", 'PunchController@view')->name("punch_view");
Route::get('/punch/insert/{punch_id}', 'PunchController@insert')->name("punch_insert");
// punch end------

//test ----
Route::get('/punch/test','PunchController@test')->name("punch_test");

