<?php

namespace App\Service\Estates;

use App\Estate;
use App\Events\ViewEstate;
use App\Service\BaseService;
use Illuminate\Http\Request;

class ShowEstateService extends BaseService
{
    public static function ShowEstate(Request $request)
    {
        $estate =  Estate::with('PropertyEstate')->find($request->estate->id);
        event(new ViewEstate($estate));
        return view('estate-view', compact('estate'));
    }
}
