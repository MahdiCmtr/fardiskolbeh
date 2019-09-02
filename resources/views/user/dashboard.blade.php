@extends('layouts.app')
@section('content')
{{--  @php
    dd(verta(2019))
@endphp  --}}
@php($UserEstate = json_decode($UserEstate))
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8">
                <h6 class="border-bottom py-1 mb-4">آخرین ملک های شما </h6>
                @foreach ($UserEstate as $estate)
                    <div class="card p-2 my-2">
                        <p class=""><a href={{$estate->state == 'enable' ? route('show-Estate',['estate'=>$estate->slug]) : '#'}}>{{$estate->title}}</a></p>
                        <div class="d-flex justify-content-between mt-4">
                            <small>تعداد بازدید <span class="text-danger">{{$estate->views}}</span></small>
                            <small>
                                {{$estate->published_at ? 'تاریخ انتشار ' . Verta::persianNumbers(verta($estate->published_at)->format('j-n-Y H:i')) : ''}}
                            </small>
                            <small>
                                @if($estate->state == 'pending')
                                    در حال بررسی
                                    <span><i class="fas fa-clock text-info"></i></span>
                                @elseif($estate->state == 'enable')
                                   تایید شده
                                   <span><i class="fas fa-check text-success"></i></span>
                                @else
                                    رد شده
                                    <span><i class="fas fa-times-circle text-danger"></i></span>
                                @endif
                            </small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
