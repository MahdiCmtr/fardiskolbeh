@extends('layouts.app')
@section('content')
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8 col-md-8">
                @isset($message)
                @if ($message == 'success')
                    <div class="alert alert-success" role="alert">
                        <h1 class="alert-heading text-center">☺</h1>
                        <p>ملک شما با موفقیت ثبت شد پس از بررسی ملک شما توسط مشاوران ما در سایت به نمایش خواهد در آمد و در اسرع وقت با شما تماس گرفته خواهد شد. وضعیت ملک خود را میتوانید در بخش بررسی ملک ها مشاهده کنید</p>
                        <hr>
                        <p class="mb-0 small text-danger">اگر هرگونه مشکلی در ثبت عدم ثبت ملک و یا  شکایت دارید میتونید در قسمت درخواست ها مدیریت را در جریان قرار دهید با تشکر . فردیس کلبه</p>
                    </div>
                @endif
                @if ($message == 'error')
                    <div class="alert pink lighten-1 text-light" role="alert">
                        <h1 class="alert-heading text-center">☹</h1>
                        <p>متاسفانه سیستم قادر به انجام درخواست شما نیست لطفا یا چند لحظه بعد امتحان کنید با با راهبر سیستم تماس برقرار کنید</p>
                    </div>
                @endif
                @else
                    <div class="alert pink" role="alert">
                        <h1 class="alert-heading text-center">☹</h1>
                        <p>درخواست شما اشتباه است ..... </p>
                    </div>
                @endisset
            </div>
        </div>
    </div>
@endsection
