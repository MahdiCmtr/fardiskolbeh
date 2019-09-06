@extends('layouts.app')
@section('content')
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8">
                <h6 class="small"><i class="fas fa-check ml-1 text-success"></i>ملک های که اخیرا <strong class="text-default">دیده اید</strong></h6>
                <hr class="mb-4 bg-danger">
                <div class="row">
                @foreach ($UserViewEstate as $estate)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card p-2 my-2">
                            <p class=""><a href={{route('show-Estate',['estate'=>$estate[0]->slug]) }}>{{$estate[0]->title}}</a></p>
                            <div class="d-flex justify-content-between mt-4">
                                <small>تعداد بازدید <span class="text-danger">{{$estate[0]->views()->count()}}</span></small>
                                <small>
                                    {{$estate[0]->published_at ? 'تاریخ انتشار ' . Verta::persianNumbers(verta($estate[0]->published_at)->format('j-n-Y H:i')) : ''}}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <h6 class="small mt-5"><i class="fas fa-check ml-1 text-success"></i>ملک های که اخیرا <strong class="text-default">اضافه</strong> کرده اید</h6>
                <hr class="mb-4 bg-danger">
                <div class="row">
                @foreach ($UserEstate as $Uestate)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card p-2 my-2">
                            <p class=""><a href={{$Uestate->state == 'enable' ? route('show-Estate',['estate'=>$estate->slug]) : '#'}}>{{$Uestate->title}}</a></p>
                            <div class="d-flex justify-content-between mt-4">
                                <small>تعداد بازدید <span class="text-danger">{{$Uestate->views()->count()}}</span></small>
                                <small>
                                    @if($Uestate->state == 'pending')
                                        <span><i class="fas fa-clock text-info"></i></span>
                                    @elseif($Uestate->state == 'enable')
                                        <span><i class="fas fa-check text-success"></i></span>
                                    @else
                                        <span><i class="fas fa-times-circle text-danger"></i></span>
                                    @endif
                                </small>
                                <small>
                                    {{$Uestate->published_at ? 'تاریخ انتشار ' . Verta::persianNumbers(verta($Uestate->published_at)->format('j-n-Y H:i')) : ''}}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
