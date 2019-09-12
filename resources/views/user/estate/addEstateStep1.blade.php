@extends('layouts.app')
@section('content')

    <div class="container p-4 text-right dir-right">
        <div class="row justify-content-between">
            @include('user.particle.nav')
            <div class="col-lg-8">
                @error('typeEstate')
                <div class="alert pink text-light lighten-3 alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                @error('CategoryEstate')
                <div class="alert pink text-light lighten-3 alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <form action={{route('user.add.estate.step2')}} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <input type="hidden" name="typeEstate" value="{{$typeEstate}}" hidden required />
                        <p class="form-control form-control-md grey lighten-2" disabled>{{$typeEstate == 'rent' ? 'رهن و اجاره' : 'خرید و فروش' }}</p>
                    </div>
                    <div class="mb-4">
                        <input type="hidden" name="CategoryEstate" value="{{$category->id}}" hidden required />
                        <p class="form-control form-control-md grey lighten-2" type="text" disabled>{{$category->title}}</p>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control form-control-md @error('titleEstate') is-invalid @enderror" placeholder="عنوان ملک را بنویسید" name="titleEstate" value="{{ old('titleEstate') }}" required autocomplete="titleEstate" autofocus>
                        @error('titleEstate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control form-control-md @error('AddressEstate') is-invalid @enderror" placeholder="آدرس ملک را بنویسید" name="AddressEstate" value="{{ old('AddressEstate') }}" required autocomplete="AddressEstate" autofocus>
                        @error('AddressEstate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control form-control-md @error('Phone') is-invalid @enderror" placeholder="شماره همراه را بنویسید" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone" autofocus>
                        @error('Phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @foreach ($property as $propertyItem)
                    <div class="mb-4">
                        <input type="text" class="form-control form-control-md @error($propertyItem->title) is-invalid @enderror" required placeholder="{{$propertyItem->title}} را بنویسید" value="{{ old($propertyItem->title."_".$propertyItem->id) }}" name="{{$propertyItem->title."_".$propertyItem->id}}" autocomplete="{{$propertyItem->title."_".$propertyItem->id}}" autofocus>
                        @error($propertyItem->title)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @endforeach
                    <div class="mb-4">
                        <textarea class="form-control form-control-md @error('description') is-invalid @enderror" type="text" required placeholder="توضیحات کلی ملک را بنویسید" rows="4" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-4 md-form">
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image1" class="@error('image1') is-invalid @enderror" value="{{ old('image1') }}">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image1') is-invalid @enderror" type="text" value="{{ old('image1') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image1')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image2" class="@error('image2') is-invalid @enderror" value="{{ old('image2') }}">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image2') is-invalid @enderror" type="text" value="{{ old('image2') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image2')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image3" class="@error('image3') is-invalid @enderror" value="{{ old('image3') }}">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image3') is-invalid @enderror" type="text" value="{{ old('image3') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image3')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image4" class="@error('image4') is-invalid @enderror" value="{{ old('image4') }}">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image4') is-invalid @enderror" type="text" value="{{ old('image4') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image4')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image5" class="@error('image5') is-invalid @enderror" value="{{ old('image5') }}">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image5') is-invalid @enderror" type="text" value="{{ old('image5') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image5')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="file-upload-wrapper col-lg-4">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-right p-2">
                                    <span>انتخاب فایل</span>
                                    <input type="file" name="image6" value="{{ old('image6') }}" class="@error('image6') is-invalid @enderror">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path @error('image6') is-invalid @enderror" type="text" value="{{ old('image6') }}" placeholder="تصویر ملک">
                                </div>
                            </div>
                            @error('image6')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <input class="form-control form-control-md" type="text" value="نویسنده {{auth()->user()->name}}" disabled>
                    </div>
                    <div class="mb-4">
                        <a href={{route('user.add.estate')}} class="btn text-light pink lighten-2 px-5">مرحله قبل</a>
                        <button type="submit" class="btn btn-success px-5">ثبت ملک</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
