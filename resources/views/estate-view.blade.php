@extends('layouts.app')

@section('content')
@php
    $estate = json_decode($estate);
@endphp
    <div class="container-fluid mt-3">
        <div class="card text-right bg-secondary py-2 px-3">
            <p class="m-0 text-light font-10">
                همه آگهی ها /
                املاک /
                <a href={{$estate->type == 'buy' ? route('list-Estate-Buy-Sales') : route('list-Estate-rent')}}>{{$estate->type == 'buy' ? 'خرید و فروش' : 'رهن و اجاره' }}</a>/
                <a href=
                    {{$estate->type == 'buy'
                    ? route('list-Estate-category-Buy-Sales',['category'=>$estate->category[0]->title])
                    : route('list-Estate-category-rent',['category'=>$estate->category[0]->title])}}>
                    {{$estate->category[0]->title}}
                </a>
            </p>
        </div>
        <div class="row mx-1 mt-2 justify-content-between">
            <div class="col-md-6 bg-green">
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
                <pre class="px-1 mt-4 text-right">
                    {{$estate->description}}
                </pre>
            </div>
            <div class="col-md-5 text-center">
                <img src={{asset('storage/estate_image/').'/'.$estate->img[0]}} alt="" id="big-img" style="width: 100%;height: 50%;">
                <div class="mb-2 mt-3 text-center">
                    @foreach ($estate->img as $image)
                        <img src={{asset('storage/estate_image/').'/'.$image}} class="m-2 small-img" alt="" height="90" width="90">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
