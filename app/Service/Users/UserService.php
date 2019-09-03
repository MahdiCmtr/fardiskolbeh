<?php

namespace App\Service\Users;

use App\Http\Requests\user\ProfileUserRequest;
use App\Service\BaseService;
use App\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        try {
            if (!is_null($request->avatar)) {
                Storage::disk('public')->delete("images/" . auth()->user()->avatar);
                $avatar = Storage::disk('public')->put('images', $request->avatar);
                $avatar = ['avatar' => explode('/', $avatar)[1]];
            }
            $newPassword = $request->new_password ? ['password' => $request->new_password] : '';
            $UpdateUser = auth()->user()->update([
                'email' => $request->email,
                'phone' => $request->phone,
                $newPassword,
                $avatar
            ]);
            dd($UpdateUser);
        } catch (Exception $ex) {
            dd($ex);
        }
    }
}
