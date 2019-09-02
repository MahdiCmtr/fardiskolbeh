<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\ProfileUserRequest;
use App\Service\Users\UserService;

class UserController extends Controller
{
    public function index()
    {
        return UserService::index();
    }
    public function profile()
    {
        return UserService::profile();
    }
    public function profileUpdate(ProfileUserRequest $request)
    {
        return UserService::profileUpdate($request);
    }
}
