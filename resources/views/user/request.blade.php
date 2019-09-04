@extends('layouts.app')

@section('content')
{{-- @php
    dd($tickets[0])
@endphp --}}
    <div class="container text-right dir-right pt-4">
        <div class="row justify-content-center p-4">
            @include('user.particle.nav')
            <div class="col-g-8 col-md-8 px-lg-auto px-0">
                <div class="chat-message">
                    <ul class="list-unstyled chat">
                        @foreach ($tickets as $ticket)
                        <li class="d-flex justify-content-between mb-4">
                            <img src={{asset('storage/images/'.$ticket->user_id[0]->avatar)}} alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1" width="35" height="35">
                            <div class="chat-body white p-3 ml-2 z-depth-1 w-100">
                            <div class="header clearfix">
                                <small class="float-left text-muted">
                                    <i class="far fa-clock mx-1"></i>{{ Verta::persianNumbers(verta($ticket->updated_at)->format('j-n-Y H:i'))}}
                                </small>
                                <strong class="float-right primary-font">{{$ticket->user_id[0]->name}}</strong>
                            </div>
                            <hr class="w-100">
                            <p class="mb-0 w-100">
                                {{$ticket->message}}
                            </p>
                            </div>
                        </li>
                        @endforeach

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
