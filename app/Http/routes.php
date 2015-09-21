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
use App\Entities\System\Auth\User;
Route::get('/home', function(Request $request){
    Auth::loginUsingId(11);
    var_dump(Auth::user()->person); die;
    return view('main');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['prefix' => 'api', 'middleware' => 'auth'], function() {
    //  Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::controller('users', 'User\UserController');
//  Route::group(['namespace' => 'User'], function() {
//    Controllers Within The "App\Http\Controllers\Admin\User" Namespace
//  });
});
