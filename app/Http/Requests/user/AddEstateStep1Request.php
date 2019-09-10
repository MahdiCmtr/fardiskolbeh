<?php

namespace App\Http\Requests\user;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\In;

class AddEstateStep1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'typeEstate' => ['required', new In(['rent', 'buy'])],
            'categoryEstate' => 'required|exists:category,id'
        ];
    }
    public function messages()
    {
        return [
            'typeEstate.required' => 'لطفا نوع معامله را بنویسید',
            'typeEstate.In' => 'نوع معامله را در بازه خواسته شده انتخاب کنید',
            'categoryEstate.required' => 'لطفا دسته بندی را انتخاب کنید',
            'categoryEstate.exists' => 'دسته بندی وارد شده صحیح نیست'
        ];
    }
}
