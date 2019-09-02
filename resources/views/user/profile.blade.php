@extends('layouts.app')

@section('content')
<div class="container text-right dir-right">
    <div class="row justify-content-center p-4">
        @include('user.particle.nav')
        <div class="col-6">
            <div class="card">
                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center" style="color: #757575;" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input id="RegisterFormFirstName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    <label class="right-0 left-unset" for="RegisterFormFirstName"> نام و نام خانوادگی</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input id="RegisterFormEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
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
                            <label class="right-0 left-unset" for="RegisterFormPassword">رمز عبور کنونی</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="md-form">
                            <input type="password" id="RegisterFormnew_Password" class="form-control" aria-describedby="RegisterFormConfirmPasswordHelpBlock" name="new_Password">
                            <label class="right-0 left-unset" for="RegisterFormnew_Password">رمز عبور جدید</label>
                        </div>
                        <!-- Phone number -->
                        <div class="md-form">
                            <input id="RegisterFormPhone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">
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
                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
