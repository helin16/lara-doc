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
// Authentication routes...
Route::group(['prefix' => 'auth', 'as' => 'auth::'], function() {
    Route::get('login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('logout', ['as' => 'getLogout', 'uses' => 'Auth\AuthController@getLogout']);
    // Registration routes...
    // Route::get('register', ['as' => 'getLogout', 'uses' => 'Auth\AuthController@getRegister']);
    // Route::post('register', ['as' => 'getLogout', 'uses' => 'Auth\AuthController@postRegister']);
});

Route::group(['prefix' => 'home', 'as' => 'HomePage::', 'middleware' => 'auth'], function() {
    Route::any('/', ['as' => 'root', 'middleware' => 'auth', function(){
        return view('home.home');
    }]);
});

Route::group(['prefix' => 'api', 'as' => 'api::', 'middleware' => 'auth'], function() {
    //  Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::controller('users', 'User\UserController');
//  Route::group(['namespace' => 'User'], function() {
//    Controllers Within The "App\Http\Controllers\Admin\User" Namespace
//  });
});

Route::any('/', function(){
    return redirect()->route('HomePage::root');
});
