<?php

namespace App\Service\Estates;

use App\Category;
use App\Estate;
use App\Service\BaseService;
use Illuminate\Http\Request;

class BuyService extends BaseService
{
    public static function buyEstateList($ListEstateCategory = null)
    {
        $ListEstateCategory == null
            ? $buyEstateList = Estate::where('type', 'buy')->whereNotNull('published_at')->paginate(7)
            : $buyEstateList = $ListEstateCategory;
        $topCategory = Category::where('top', 1)->limit(10)->get('title');
        return view('Sales', compact('buyEstateList', 'topCategory'));
    }
    public static function buyEstateCategoryList(Request $request)
    {
        return Self::buyEstateList($request->category->Estates()->where('type', 'buy')->whereNotNull('published_at')->paginate(7));
    }
}
