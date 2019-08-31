@extends('layouts.app')


@section('content')
    {{-- <div class="bg-main d-flex align-items-center">
        <div class="container bg-light py-4">
            <div class="row">
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option value="1">نوع ملک</option>
                    </select>
                </div>
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option>نوع ملک</option>
                    </select>
                </div>
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option>نوع ملک</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">جستجو کنید</button>
            </div>
        </div>
    </div> --}}
    <div data-test="view" class="view bg-main">
        <div data-test="mask" class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="white-text text-center text-md-left col-md-6 mt-xl-5 mb-5">
                    <h1 class="display-4 font-weight-bold">املاک کرج</h1>
                    <hr class="hr-light"><h6 class="mb-4">
                    <h6 class="dir-right text-justify" style="line-height: 2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </h6>
                    <button data-test="button" type="button" class="btn-outline-white btn Ripple-parent px-5">
                            بیشتر
                            <div data-test="waves" class="Ripple Ripple-outline " style="top: 0px; left: 0px; width: 0px; height: 0px;"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
