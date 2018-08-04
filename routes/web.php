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
Route::get('mentee/login','UserController@login');
Route::get('mentee/verify/{token}','UserController@verifyUser');
Route::post('mentee/login','UserController@loginAuth');

Route::get('mentee/getstarted','UserController@getStarted');
Route::post('mentee/getstarted','UserController@recordPreference');

Route::get('mentee/applymentor', 'UserController@apply');
Route::get('mentee/findmentor', 'UserController@findMentor');
Route::get('mentee/sendrequest/{id}', 'UserController@sendMentorRequest');

Route::get('mentee/{id}', 'UserController@show');

Route::resource('mentee','UserController');

//-----------------------------------------------------------------------------
Route::get('data/search', 'ResourceController@find');


Route::resource('data','ResourceController');

//------------------------------------------------------------------------------
Route::get('mentor/registered', 'MentorController@registered');
Route::get('mentor/requestlist', 'MentorController@menteeList');


Route::resource('mentor', 'MentorController');

//-------------------------------------------------------------------------------
Route::get('/', function () {
    return view('home');
});
