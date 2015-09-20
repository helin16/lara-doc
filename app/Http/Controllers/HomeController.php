<?php

use App\Http\Controllers\Controller;
use App\Entities\System\Auth\User;

class HomeController extends Controller
{
	public function getIndex()
	{
		echo "fsfdsfd";
		
		/*
		Route::get('/', function(){
			return view('main', array('users' => User::all()));
		});
		*/
	}
}