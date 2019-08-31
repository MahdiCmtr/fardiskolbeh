<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Rules\PhoneNumberFilter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['required', new PhoneNumberFilter()],
            'avatar' => ['mimes:jpeg,jpg,png', 'max:5024'],
        ], [
            'name.required' => 'لظفا نام را وارد کنید',
            'name.string' => 'نام باید حروف باشد',
            'email.email' => 'ایمیل وارد شده صحیح نمیباشد',
            'email.unique' => 'ایمیل قبلا ثبت شده است',
            'password.min' => 'حداقل برای پسورد 6 کاراکتر است',
            'password.confirmed' => 'پسورد مطابقت ندارد',
            'avatar.mimes' => 'فرمت های قابل قبول jpg - jpeg - png ',
            'avatar.max' => 'حجم عکس حداکثر 5 مگابایت'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => HASH::make($data['password']),
            'type' => User::STATE_NORMAL,
            'phone' => mobileGenerator($data['phone']),
            'avatar' => $data['avatar'],
            'state' => 'enable'
        ]);
    }
}
