<?php

namespace App\Http\Requests\user;

use App\Rules\ChangePasswordUser;
use App\Rules\PhoneNumberFilter;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class RegTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('isNormal', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:ticket,title|max:255',
            'description' => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'فیلد عنوان را باید بنویسید',
            'title.unique' => 'این درخواست قبلا ثبت شده است',
            'description.required' => 'فیلد توضیحات را باید بنویسید',
        ];
    }
}
