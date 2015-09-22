<?php

namespace App\Http\Controllers\Api\User;

use App\Entities\System\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\ApiController;

class UserController extends ApiController
{
    /**
     * Responds to requests to GET /users
     */
    public function index()
    {
        return 'hello, user';
    }
    /**
     * Responds to requests to GET /users/show/1
     */
    public function getShow($id)
    {
         return 'hello, user: ' . $id;
    }
    /**
     * Responds to requests to GET /users/admin-profile
     */
    public function getAdminProfile()
    {
        //
    }
    /**
     * Responds to requests to GET /users/profile
     */
    public function getProfile(Request $request, $id = null)
    {
		var_dump(Auth::user()->toJson());
    }
}