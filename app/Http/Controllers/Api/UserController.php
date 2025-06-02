<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\User\UserServices;
use App\Models\Role;
use App\Models\Worker;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function register(Request $request)
    {
        $response = UserServices::register($request);


        return $response;
    }

    public function auth(Request $request)
    {
        $response = UserServices::login($request);


        return $response;
    }

    public function getAllInfo($id)
    {
        $response = UserServices::getAllInfo($id);


        return $response;
    }

    public function authEmail(Request $request)
    {
        UserServices::authEmail($request);
    }

    public function autoAuth(Request $request)
    {
        $user = UserServices::autoAuth($request);
        return view('authorizationEmail', ['remember_token' => $user->remember_token]);
    }

    public function authTocken(Request $request)
    {
        $response = UserServices::authTocken($request);


        return $response;
    }
}
