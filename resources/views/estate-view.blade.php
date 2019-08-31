@extends('layouts.app')

@section('content')
@php
    $estate = json_decode($estate);
@endphp
    <div class="container-fluid" style="margin-top: 70px">
        <nav data-test="breadcrumb">
            <ol class="breadcrumb white-text primary-color">
                <li data-test="breadcrumb-item" class="breadcrumb-item">
                    <a href="#">همه آگهی ها</a>
                </li>
                <li data-test="breadcrumb-item" class="breadcrumb-item">
                    <a href="#">املاک</a>
                </li>
                <li data-test="breadcrumb-item" class="breadcrumb-item">
                    <a href={{$estate->type == 'buy' ? route('list-Estate-Buy-Sales') : route('list-Estate-rent')}}>{{$estate->type == 'buy' ? 'خرید و فروش' : 'رهن و اجاره' }}</a>
                </li>
                <li data-test="breadcrumb-item" class="breadcrumb-item">
                    <a href={{$estate->type == 'buy'
                            ? route('list-Estate-category-Buy-Sales',['category'=>$estate->category[0]->title])
                            : route('list-Estate-category-rent',['category'=>$estate->category[0]->title])}}>
                            {{$estate->category[0]->title}}
                    </a>
                </li>
            </ol>
        </nav>
        <div class="row mx-1 mt-2 justify-content-between dir-left">
            <div class="col-md-5">
                <!--Carousel Wrapper-->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        @foreach ($estate->img as $index => $image)
                            <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                            <img class="d-block w-100" src={{asset('storage/estate_image/').'/'.$image}}
                                alt="fardiskolbeh فردیس کلبه">
                            </div>
                        @endforeach
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                    <ol class="carousel-indicators">
                        @foreach ($estate->img as $index => $image)
                        <li data-target="#carousel-thumb" data-slide-to={{$index}} class="{{$index == 0 ? 'active' : ''}}">
                            <img src="{{asset('storage/estate_image/').'/'.$image}}" width="70" height="70">
                        </li>
                        @endforeach
                    </ol>
                </div>
                <!--/.Carousel Wrapper-->
            </div>
            <div class="col-md-6">
                <h1 class="text-right mt-2 dir-right">
                    {{$estate->title}}
                </h1>
                <p class="text-right mt-2">{{$estate->updated_at}}</p>
                <a href="#"><button class="btn btn-danger btn-block py-2 mt-4">دریافت اطلاعات
                        بیشتر</button></a>
                <div Class="mt-4">
                    <ul class="list-group list-group-flush p-0">
                        @foreach ($estate->property_estate as $item)
                        <li class="list-group-item d-flex justify-content-between">
                            <a href="#" class="">{{$item->proprtyTitle}}</a>
                            <a href="#" class="">{{$item->propertyValue}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <h6 class="mt-5 text-right">توضیحات</h6>
                <pre class="px-1 text-right text-wrap">
                    {!!$estate->description!!}
                </pre>
            </div>
        </div>
    </div>
@endsection
