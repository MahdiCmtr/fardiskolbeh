<?php

namespace App\Http\Controllers;


use App\Http\Requests\user\AddEstateStep1Request;
use App\Http\Requests\user\AddEstateStep2Request;
use App\Http\Requests\user\CheckEstateRequest;
use App\Http\Requests\user\ProfileUserRequest;
use App\Http\Requests\user\RegTicketRequest;
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
    public function CheckEstate(CheckEstateRequest $request)
    {
        return UserService::CheckEstate($request);
    }
    public function UserTicket(UserTicketRequest $request)
    {
        return UserService::UserTicket($request);
    }
    public function ShowTicket(ShowTicketRequest $request)
    {
        return UserService::ShowTicket($request);
    }
    public function RegTiket(RegTicketRequest $request)
    {
        return UserService::RegTiket($request);
    }
    public function addEstate()
    {
        return UserService::addEstate();
    }
    public function addEstateStep1(AddEstateStep1Request $request)
    {
        return UserService::addEstateStep1($request);
    }
    public function addEstateStep2(AddEstateStep2Request $request)
    {
        return UserService::addEstateStep2($request);
    }
    public function addEstateFinish()
    {
        return UserService::addEstateFinish();
    }
}
