<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Entities\System\Auth\User;
class HomeController extends Controller
{
	public function getIndex()
	{
		return view('main',['users' => User::all() ]);
	}
}