@extends('layouts.app')
@section('content')
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action active" href="#">پنل</a>
                    <a class="list-group-item list-group-item-action" href="#">بررسی ملک ها</a>
                    <a class="list-group-item list-group-item-action" href="#">ویرایش پروفایل</a>
                    <a class="list-group-item list-group-item-action" href="#">اضافه کردن ملک</a>
                    <a class="list-group-item list-group-item-action" href="#">درخواست ها</a>
                </div>
            </div>
            <div class="col-lg-8">
            <h6 class="border-bottom py-1 mb-4">آخرین ملک های شما </h6>
                <div class="card p-2 my-2">
                    <p class=""><a href="#">متن برای تست عنوان ملک </a></p>
                    <div class="d-flex justify-content-between mt-4">
                        <small>تعداد بازدید <span class="text-danger">10</span></small>
                        <small>تایید شده <span><i class="fas fa-check text-success"></i></span></small>
                    </div>
                </div>
                <div class="card p-2 my-2">
                    <p class=""><a href="#">متن برای تست عنوان ملک </a></p>
                    <div class="d-flex justify-content-between mt-4">
                        <small>تعداد بازدید <span class="text-danger">10</span></small>
                        <small>تایید شده <span><i class="fas fa-check text-success"></i></span></small>
                    </div>
                </div>
                <div class="card p-2 my-2">
                    <p class=""><a href="#">متن برای تست عنوان ملک </a></p>
                    <div class="d-flex justify-content-between mt-4">
                        <small>تعداد بازدید <span class="text-danger">10</span></small>
                        <small>تایید شده <span><i class="fas fa-check text-success"></i></span></small>
                    </div>
                </div>
                <div class="card p-2 my-2">
                    <p class=""><a href="#">متن برای تست عنوان ملک </a></p>
                    <div class="d-flex justify-content-between mt-4">
                        <small>تعداد بازدید <span class="text-danger">10</span></small>
                        <small>تایید شده <span><i class="fas fa-check text-success"></i></span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
