@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>فرم ثبت نام در فردیس کلبه</strong>
                </h5>
                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input id="RegisterFormFirstName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label class="right-0 left-unset" for="RegisterFormFirstName">نام</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input id="RegisterFormLastName" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
                                    <label class="right-0 left-unset" for="RegisterFormLastName">نام خانوادگی</label>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input id="RegisterFormEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label class="right-0 left-unset" for="RegisterFormEmail">ایمیل(نام کاربری)</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="md-form">
                            <input id="RegisterFormPasswordHelpBlock" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label class="right-0 left-unset" for="RegisterFormPassword">رمز عبور</label>
                            <small id="RegisterFormPasswordHelpBlock" class="form-text text-muted mb-1">
                                حداقل 6 کاراکتر
                            </small>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="md-form">
                            <input type="password" id="RegisterFormConfirmPassword" class="form-control" aria-describedby="RegisterFormConfirmPasswordHelpBlock" name="password_confirmation">
                            <label class="right-0 left-unset" for="RegisterFormConfirmPassword">تکرار رمبز عبور</label>
                        </div>
                        <!-- Phone number -->
                        <div class="md-form">
                            <input id="RegisterFormPhone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                            <label class="right-0 left-unset" for="RegisterFormPhone">موبایل</label>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right d-inline-block">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="avatar" class=" @error('avatar') is-invalid @enderror">
                                </div>
                                <div class="file-path-wrapper d-inline-block">
                                    <input class="file-path @error('avatar') is-invalid @enderror" type="text" placeholder="آپلود تصویر پروفایل">
                                </div>
                                @error('avatar')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- AcceptRules -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="RegisterFormAcceptRules" name="">
                            <label class="right-0 left-unset" class="form-check-label" for="RegisterFormAcceptRules">قوانین وبسایت را قبول دارم</label>
                        </div>
                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
