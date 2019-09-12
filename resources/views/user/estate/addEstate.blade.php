@extends('layouts.app')
@section('content')
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8">
                @error('typeEstate')
                <div class="alert pink text-light lighten-3 alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                @error('categoryEstate')
                <div class="alert pink lighten-3 text-light alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <form action={{route('user.add.estate.step1')}} method="get">
                    <h6 class="small">نوع <span class="text-success font-weight-bold">معامله</span> خود را انتخاب کنید</h6>
                    <select class="type-estate md-form mb-5" required name="typeEstate">
                        <option value="" disabled selected>بدون انتخاب</option>
                        <option value="buy">خرید و فروش</option>
                        <option value="rent">رهن و اجاره</option>
                    </select>
                    <h6 class="small"><span class="text-success font-weight-bold">دسته بندی</span> ملک خود را وارد کنید</h6>
                    <select class="category-estate md-form mb-5" required name="categoryEstate">
                        <option value="" disabled selected>بدون انتخاب</option>
                        @foreach ($category as $categoryItem)
                            <option class="text-right" value="{{$categoryItem->id}}">{{$categoryItem->title}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="مرحله بعد" class="btn btn-primary btn-block px-5" />
                </form>
            </div>
        </div>
    </div>
@endsection
