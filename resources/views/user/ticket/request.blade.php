@extends('layouts.app')

@section('content')
    <div class="container text-right dir-right pt-4">
        @error('title')
            <div class="alert alert-danger alert-dismissible mb-2 pr-2 fade show" role="alert">
                {{$message}}
                <button type="button" class="close right-unset left-0" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        @error('description')
            <div class="alert alert-danger alert-dismissible mb-2 pr-2 fade show" role="alert">
                {{$message}}
                <button type="button" class="close right-unset left-0" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="row justify-content-center p-4">
            @include('user.particle.nav')
            <div class="col-g-8 col-md-8 px-lg-auto px-0">
                <a class="btn btn-success" data-toggle="modal" data-target=".SendRequestModal">ایجاد درخواست</a>
                <div class="modal fade SendRequestModal" tabindex="-1" role="dialog" aria-labelledby="SendRequest" aria-hidden="true">
                    <div class="modal-dialog modal-l">
                        <div class="modal-content">
                            <h6 class="modal-title text-center py-3 bg-default text-light" id="exampleModalLabel">ارسال درخواست جدید</h6>
                            <form class="px-5 pb-2" action="{{route('user.ticket.register')}}" method="POST">
                                @csrf
                                <div class="md-form">
                                    <input type="text" class="form-control small" id="title" name="title" placeholder="عنوان درخواست را بنویسید ..." >
                                </div>
                                <div class="md-form">
                                    <textarea type="text" id="message-text" class="form-control md-textarea" rows="3" name="description" placeholder="متن درخواست را بنویسید ..."></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary float-left">ارسال درخواست</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="">
                    @foreach ($tickets as $ticket)
                        <a href={{route('user.ticket.show',['TicketId' => $ticket->id])}} class="list-group-item list-group-item-action list-group-item-{{($ticket->view == 1 && !empty($ticket->answer)) ? 'success' : 'info'}}">
                            {{$ticket->title}}
                            @if (($ticket->view == 1) && (!empty($ticket->answer)))
                            <small class="float-left"><i class="fas fa-check text-success"></i></small>
                            @else
                            <small class="float-left"><i class="fas fa-clock text-info"></i></small>
                            @endif
                            <span class="float-left ml-5"><i class="far fa-clock mx-1"></i>{{ Verta::persianNumbers(verta($ticket->updated_at)->format('Y-n-j'))}}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
