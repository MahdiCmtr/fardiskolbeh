<?php

namespace App\Service\Users;

use App\Http\Requests\user\ProfileUserRequest;
use App\Http\Requests\user\UserTicketRequest;
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
        return view('user.profile');
    }
    public static function profileUpdate(ProfileUserRequest $request)
    {
        $user = auth()->user();
        try {
            if (!is_null($request->avatar)) {
                Storage::disk('public')->delete("images/" . auth()->user()->avatar);
                $avatar = Storage::disk('public')->put('images', $request->avatar);
                $user->avatar = explode('/', $avatar)[1];
            }
            !is_null($request->newPassword) ? $user->password = Hash::make($request->newPassword) : null;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->save();
            return view('user.profile', ['message' => 'با موفقیت انجام شد', 'color' => 'success']);
        } catch (Exception $ex) {
            return view('user.profile', ['message' => 'مشکلی به وجود آمده است', 'color', 'danger']);
        }
    }
    public static function UserTicket(UserTicketRequest $request)
    {
        $UserTicket = auth()->user()->ticket;
        // recursive Function
        AllTicket($UserTicket);
        $Alltickets = [];
        function AllTicket($UserTicket)
        {
            foreach ($UserTicket as $ticket) {
                $Alltickets[] = $ticket;
                if ($ticket->answer != null) {
                    AllTicket($ticket->answer);
                }
                return $Alltickets;
            }
        }
        dd($Alltickets);
        return view('user.request', ['tickets' => json_decode($UserTicket)]);
    }
}
