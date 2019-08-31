@extends('layouts.app')
@section('content')

<div class="container-fluid p-2 pb-5">
    <div class="row text-right">
        <div class="col-md-2">
            @include('particle.Category-Estate')
        </div>
        <div class="col-md-10 overflow-auto">
            @include('particle.quick-search')
        </div>
        @foreach ($rentEstateList as $posts)
            @include('particle.card-estate')
        @endforeach
        <div class="row justify-content-center">
            {{$rentEstateList->links()}}
        </div>
    </div>
</div>

@endsection
