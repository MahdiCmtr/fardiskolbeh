@extends('layouts.app')

@section('content')
    <div class="container text-right dir-right pt-4">
        <div class="row justify-content-center p-4">
            @include('user.particle.nav')
            <div class="col-g-8 col-md-8 px-lg-auto px-0">
                <div class="chat-message">
                    <ul class="list-unstyled chat">
                    <li class="d-flex justify-content-between mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1" width="35" height="35">
                        <div class="chat-body white p-3 ml-2 z-depth-1">
                        <div class="header clearfix">
                            <small class="float-left text-muted">
                                <i class="far fa-clock mx-1"></i>12 mins ago
                            </small>
                            <strong class="float-right primary-font">Brad Pitt</strong>
                        </div>
                        <hr class="w-100">
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-4">
                        <div class="chat-body white p-3 z-depth-1">
                        <div class="header clearfix">
                            <small class="float-right text-muted">
                                <i class="far fa-clock mx-1"></i>12 mins ago
                            </small>
                            <strong class="float-left primary-font">Brad Pitt</strong>
                        </div>
                        <hr class="w-100">
                        <p class="mb-0">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p>
                        </div>
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1" width="35" height="35">
                    </li>
                    <li class="white">
                        <div class="form-group basic-textarea">
                        <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="درخواست خود را بنویسید ..."></textarea>
                        </div>
                    </li>
                    <button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">ارسال درخواست</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
