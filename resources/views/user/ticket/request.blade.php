@extends('layouts.app')

@section('content')
    <div class="container text-right dir-right pt-4">
        <div class="row justify-content-center p-4">
            @include('user.particle.nav')
            <div class="col-g-8 col-md-8 px-lg-auto px-0">
                <a class="btn btn-success">ایجاد درخواست</a>
                <hr class="my-4">
                <div class="">
                    @foreach ($tickets as $ticket)
                        <a href={{route('user.ticket.show',['TicketId' => $ticket->id])}} class="list-group-item list-group-item-action list-group-item-{{!empty($ticket->answer) ? 'success' : 'info'}}">
                            {{$ticket->title}}
                            @if (!empty($ticket->answer))
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
