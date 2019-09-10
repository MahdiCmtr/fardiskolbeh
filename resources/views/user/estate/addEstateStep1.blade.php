@extends('layouts.app')
@section('content')
    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8">
                <form action={{route('user.add.estate.step1')}} method="post">
                    @csrf
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" value="{{$typeEstate == 'rent' ? 'رهن و اجاره' : 'خرید و فروش' }}" disabled>
                    </div>
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" value="{{$category->title}}" disabled>
                    </div>
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" placeholder="عنوان ملک">
                    </div>
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" placeholder="آدرس ملک">
                    </div>
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" placeholder="شماره همراه">
                    </div>
                    @foreach ($property as $propertyItem)
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" placeholder={{$propertyItem->title}} name={{$propertyItem->title}}>
                    </div>
                    @endforeach
                    <div>
                        <textarea class="form-control form-control-md mb-4" type="text" placeholder="توضیحات کلی ملک" rows="4"></textarea>
                    </div>
                    <div>
                        <div class="file-upload-wrapper">
                            <input type="file" id="input-file-now-custom-2" class="file-upload1" data-height="200" />
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" id="input-file-now-custom-2" class="file-upload2" data-height="200" />
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" id="input-file-now-custom-2" class="file-upload3" data-height="200" />
                        </div>
                    </div>
                    <div>
                        <input class="form-control form-control-md mb-4" type="text" value="نویسنده {{auth()->user()->name}}" disabled>
                    </div>
                    <div>
                        <a href={{route('user.add.estate')}} class="btn text-light pink lighten-2 px-5">مرحله قبل</a>
                        <button type="submit" class="btn btn-success px-5">ثبت نهایی ملک</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
