<?php

namespace App\Service\Users;

use App\Category;
use App\Estate;
use App\Http\Requests\user\AddEstateStep1Request;
use App\Http\Requests\user\CheckEstateRequest;
use App\Http\Requests\user\ProfileUserRequest;
use App\Http\Requests\user\RegTicketRequest;
use App\Http\Requests\user\ShowTicketRequest;
use App\Http\Requests\user\UserTicketRequest;
use App\Property;
use App\Service\BaseService;
use App\Ticket;
use App\User;
use App\View;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class UserService extends BaseService
{
    public static function index()
    {
        $user = auth()->user();
        $userView = View::where('user_id', $user->id)->orderBy('updated_at', 'desc')->limit(4)->get('estate_id');
        foreach ($userView as $userViewId) {
            $UserViewEstate[] = Estate::where('id', $userViewId->estate_id)->get();
        }
        $UserEstate = $user->estate()->orderBy('updated_at', 'DESC')->limit(4)->get();
        return view('user.panel', compact('UserViewEstate', 'UserEstate'));
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
    public static function CheckEstate(CheckEstateRequest $request)
    {
        $user = auth()->user();
        $UserEstate = $user->estate()->orderBy('updated_at', 'DESC')->paginate(10);
        return view('user.CheckEstate', compact('UserEstate'));
    }
    public static function UserTicket(UserTicketRequest $request)
    {
        $UserTicket = auth()->user()->ticket()->whereNull('parent_id')->orderBy('id', 'desc')->get();
        return view('user.ticket.request', ['tickets' => json_decode($UserTicket)]);
    }
    public static function ShowTicket(ShowTicketRequest $request)
    {
        $UserTicket = $request->TicketId;
        return view('user.ticket.showTicket', ['tickets' => json_decode($UserTicket)]);
    }
    public static function RegTiket(RegTicketRequest $request)
    {
        Ticket::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'message' => $request->description
        ]);
        return self::UserTicket(new UserTicketRequest);
    }
    public static function addEstate()
    {
        $category = Category::all();
        return view('user.estate.addEstate', compact('category'));
    }
    public static function addEstateStep1(AddEstateStep1Request $request)
    {
        extract($request->validated());
        $property = Property::where('category_id', $categoryEstate)->get();
        $category = Category::find($categoryEstate);
        return view('user.estate.addEstateStep1', compact('property', 'typeEstate', 'category'));
    }
}
