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

//manager---
Route::get("/manager/list", 'ManagerController@list')->name("manager_view");
//Route::get("/manager/list", 'ManagerController@edit')->name("manager_edit");
Route::get("/manager/employee", 'UserController@list')->name("employee_view");
Route::get("/manager/edituser/{userid}", 'UserController@edit')->name("edituser_view");
//update userinfo
Route::post("/manager/updateuser", 'UserController@update')->name("edituser_update");
//delete user
Route::get("/manager/deleteuser/{userid}", 'UserController@deleteuser')->name("edituser_delete");

//edit punch
Route::get("/manager/edithitsory/{punchid}", 'ManagerController@edit')->name("editpunch_view");
//update punch
Route::post("/manager/updatepunch", 'ManagerController@update')->name("editpunch_update");
//delete punch
Route::get("/manager/deletepunch/{punchid}", 'ManagerController@deletepunch')->name("editpunch_delete");



