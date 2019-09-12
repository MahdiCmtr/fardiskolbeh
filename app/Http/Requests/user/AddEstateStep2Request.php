<?php

namespace App\Http\Requests\user;

use App\Property;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumberFilter;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\In;

class AddEstateStep2Request extends FormRequest
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
        $data = [];
        $property = Property::where('category_id', $this->CategoryEstate)->get();
        foreach ($property as $value) {
            $data = array_merge($data, [$value->title . '_' . $value->id => 'required|string']);
        };
        for ($i = 1; $i <= 6; $i++) {
            $data = array_merge($data, [
                "image$i" => 'image|max:5024|mimes:jpeg,jpg,png'
            ]);
        }
        $data = array_merge($data, [
            "description" => 'required|string',
            'titleEstate' => 'required|max:50|min:5|',
            'AddressEstate' => 'required|string',
            'Phone' => [new PhoneNumberFilter()],
            'typeEstate' => ['required', new In(['rent', 'buy'])],
            'CategoryEstate' => 'required|exists:category,id',
        ]);
        return $data;
    }

    public function messages()
    {
        $property = Property::where('category_id', $this->CategoryEstate)->get();
        $data = [];
        foreach ($property as $value) {
            $data = array_merge($data, [$value->title . '.required' => " لطفا فیلد  $value->title  را وارد کنید "]);
        };
        for ($i = 1; $i <= 6; $i++) {
            $data = array_merge($data, [
                "image$i.max" => 'حداکثر حجم تصویر باید 5 مگابایت باشد',
                "image$i.mimes" => 'تصویر باید یکی از فرمتهای jpeg, jpg, png باشد',
                "image$i.image" => 'فایل باید تصویر باشد'
            ]);
        }
        $data = array_merge($data, [
            'titleEstate.required' => 'لطفا عنوان ملک را بنویسید',
            'titleEstate.max' => ' حداقل کاراکتر برای عنوان 50 کاراکتر بقیه را در توضیحات بنویسید',
            'titleEstate.min' => 'حداقل 5 حرف را وارد کنید',
            'typeEstate.required' => 'لطفا نوع معامله را بنویسید',
            'typeEstate.in' => 'نوع معامله را درست انتخاب کنید',
            'CategoryEstate.required' => 'لطفا دسته بندی را انتخاب کنید',
            'CategoryEstate.exists' => 'دسته بندی وارد شده صحیح نیست',
            'description.required' => 'لطفا توضیحات ملک خود را بنویسید',
        ]);
        return $data;
    }
}
