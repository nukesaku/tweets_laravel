<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/tweets', 'TweetsController');
Route::get('/hash_tags/{id}/tweets', 'TweetsController@showByHashTag')->name('hash_tags.tweets');

// ルーティングレベルでの認証要求
Route::group(['middleware' => 'auth'], function () {
    Route::get('users/{id}/profile', 'UserProfilesController@show')->name('user_profiles.show');
    Route::get('users/{id}/profile/edit', 'UserProfilesController@edit')->name('user_profiles.edit');
    Route::match(['put', 'patch'], 'users/{user}/profile', 'UserProfilesController@update')->name('user_profiles.update');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('auth.getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('auth.postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('auth.getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister')->name('auth.getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('auth.postRegister');
