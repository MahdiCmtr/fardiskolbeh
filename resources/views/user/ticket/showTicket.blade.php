@extends('layouts.app')

@section('content')
    <div class="container text-right dir-right pt-4">
        <div class="row justify-content-center p-4">
            @include('user.particle.nav')
            <div class="col-g-8 col-md-8 px-lg-auto px-0">
                <div class="chat-message">
                    <ul class="list-unstyled chat">
                        <div class="alert alert-primary" role="alert">
                            موضوع تیکت شما : {{$tickets->title}}
                        </div>
                        <li class="d-flex justify-content-between mb-4">
                            <img src={{asset('storage/images/'.$tickets->user_id[0]->avatar)}} alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1" width="35" height="35">
                            <div class="chat-body white p-3 ml-2 z-depth-1 w-100">
                            <div class="header clearfix">
                                <small class="float-left text-muted">
                                    <i class="far fa-clock mx-1"></i>{{ Verta::persianNumbers(verta($tickets->updated_at)->format('j-n-Y H:i'))}}
                                </small>
                                <strong class="float-right primary-font text-primary">{{$tickets->user_id[0]->name}}</strong>
                            </div>
                            <hr class="w-100">
                            <p class="mb-0 w-100">
                                {{$tickets->message}}
                            </p>
                            </div>
                        </li>
                        @if (!is_null($tickets->answer))
                            @foreach ($tickets->answer as $ansTicket)
                            <li class="d-flex justify-content-between mb-4">
                                <img src={{asset('storage/images/'.$ansTicket->user_id[0]->avatar)}} alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1" width="35" height="35">
                                <div class="chat-body white p-3 ml-2 z-depth-1 w-100">
                                <div class="header clearfix">
                                    <small class="float-left text-muted">
                                        <i class="far fa-clock mx-1"></i>{{ Verta::persianNumbers(verta($ansTicket->updated_at)->format('j-n-Y H:i'))}}
                                    </small>
                                    <strong class="float-right primary-font">{{$ansTicket->user_id[0]->name}}</strong>
                                </div>
                                <hr class="w-100">
                                <p class="mb-0 w-100">
                                    {{$ansTicket->message}}
                                </p>
                                </div>
                            </li>
                            @endforeach
                        @endif
                    <li class="white">
                        <div class="form-group basic-textarea">
                        <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="جواب درخواست را بنویسید ..."></textarea>
                        </div>
                    </li>
                    <button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">ارسال درخواست</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
