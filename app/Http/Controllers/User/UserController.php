<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Responds to requests to GET /users
     */
    public function getIndex()
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
		var_dump($id);
    }
}