<?php

namespace App\Http\Controllers;

use App\Service\Estates\BuyService;
use App\Service\Estates\RentService;
use App\Service\Estates\ShowEstateService;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function ShowEstate(Request $request)
    {
        return ShowEstateService::ShowEstate($request);
    }

    // Buy And Sales
    public function buyEstateList()
    {
        return BuyService::buyEstateList();
    }
    public function buyEstateCategoryList(Request $request)
    {
        return BuyService::buyEstateCategoryList($request);
    }

    // Rent
    public function rentEstateList()
    {
        return RentService::rentEstateList();
    }
    public function rentEstateCategoryList(Request $request)
    {
        return RentService::rentEstateCategoryList($request);
    }
}
