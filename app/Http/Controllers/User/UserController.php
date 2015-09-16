<?php

namespace App\Http\Controllers\User;

use App\Entities\System\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Responds to requests to GET /users
     */
    public function getIndex()
    {
        return 'hello, user <pre>' . print_r($_REQUEST,true);
    }
    /**
     * Responds to requests to GET /users/show/1
     */
    public function getUser($id)
    {
         return response(User::find($id)->toJson())->header('content-type', 'Application/json');
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