<?php

namespace App\Service\Users;

use App\Http\Requests\user\ProfileUserRequest;
use App\Service\BaseService;
use App\User;

class UserService extends BaseService
{
    public static function index()
    {
        $user = auth()->user();
        $UserEstate = $user->estate()->orderBy('updated_at', 'DESC')->limit(4)->get();
        return view('user.dashboard', compact('UserEstate'));
    }
    public static function profile()
    {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }
    public static function profileUpdate(ProfileUserRequest $request)
    {
        dd($request->validate);
    }
}
