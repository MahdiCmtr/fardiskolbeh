<?php

namespace App\Http\Requests\user;

use App\Rules\ChangePasswordUser;
use App\Rules\PhoneNumberFilter;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ProfileUserRequest extends FormRequest
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
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password' => ['string', 'min:6', new ChangePasswordUser()],
            'phone' => [new PhoneNumberFilter(), 'unique:users,phone,' . auth()->user()->id],
            'avatar' => ['mimes:jpeg,jpg,png', 'max:5024'],
        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'ایمیل وارد شده صحیح نمیباشد',
            'email.unique' => 'ایمیل قبلا ثبت شده است',
            'password.min' => 'حداقل برای پسورد 6 کاراکتر است',
            'password.confirmed' => 'پسورد مطابقت ندارد',
            'avatar.mimes' => 'فرمت های قابل قبول jpg - jpeg - png ',
            'avatar.max' => 'حجم عکس حداکثر 5 مگابایت',
            'phone.unique' => 'شماره همراه قبلا ثبت شده است'
        ];
    }
}
