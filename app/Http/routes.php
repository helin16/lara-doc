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
use App\Entities\System\Auth\Session;

Route::match(['get', 'post'], '/', function () {
	$results = Session::all();
	return view('main', ['sessions' => $results]);
});
Route::controller('users', 'User\UserController');


// Route::group(['namespace' => 'Admin'], function()
// {
// 	// Controllers Within The "App\Http\Controllers\Admin" Namespace

// 	Route::group(['namespace' => 'User'], function()
// 	{
// 		// Controllers Within The "App\Http\Controllers\Admin\User" Namespace
// 	});
// });
