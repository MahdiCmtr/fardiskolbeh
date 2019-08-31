<?php

namespace App\Service\Estates;

use App\Category;
use App\Estate;
use App\Service\BaseService;
use Illuminate\Http\Request;

class RentService extends BaseService
{
    public static function rentEstateList($ListEstateCategory = null)
    {
        $ListEstateCategory == null
            ? $rentEstateList = Estate::where('type', 'rent')->whereNotNull('published_at')->paginate(7)
            : $rentEstateList = $ListEstateCategory;
        $topCategory = Category::where('top', 1)->limit(10)->get('title');
        return view('Rent', compact('rentEstateList', 'topCategory'));
    }
    public static function rentEstateCategoryList(Request $request)
    {
        return Self::rentEstateList($request->category->Estates()->where('type', 'rent')->whereNotNull('published_at')->paginate(7));
    }
}
