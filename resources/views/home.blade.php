@extends('layouts.app')

@section('bodyClass',"h-90vh")
@section('content')
    <div class="bg-main d-flex align-items-center">
        <div class="container bg-light py-4">
            <div class="row">
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option value="1">نوع ملک</option>
                    </select>
                </div>
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option>نوع ملک</option>
                    </select>
                </div>
                <div class="col-lg-4 my-1">
                    <select class="form-control form-control-lg d-block">
                        <option>نوع ملک</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">جستجو کنید</button>
            </div>
        </div>
    </div>
@endsection
