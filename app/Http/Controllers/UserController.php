<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\ProfileUserRequest;
use App\Http\Requests\user\ShowTicketRequest;
use App\Http\Requests\user\UserTicketRequest;
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
    public function UserTicket(UserTicketRequest $request)
    {
        return UserService::UserTicket($request);
    }
    public function ShowTicket(ShowTicketRequest $request)
    {
        return UserService::ShowTicket($request);
    }
}
