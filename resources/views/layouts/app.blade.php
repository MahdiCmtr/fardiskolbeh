<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="فردیس کلبه جای برای خرید بهترین خانه" />
    <title>@yield('title','فردیس کلبه')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
</head>
<body class=@yield("bodyClass") bg-white>
    <!--Navbar -->
    <nav class="navbar navbar-dark fixed-top navbar-expand-md scrolling-navbar indigo py-0 font-small">
        <a class="navbar-brand" href={{route('index')}}>فردیس کلبه</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between text-right py-2" id="navbarSupportedContent-555">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href={{route('index')}}>صفحه اصلی
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('list-Estate-Buy-Sales')}}>خرید و فروش</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('list-Estate-rent')}}>رهن و اجاره</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="route('contact')">ارتباط با ما</a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav nav-flex-icons dir-left">
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src={{asset('storage/images/').'/'.auth()->user()->avatar}} class="rounded-circle z-depth-0"
                        alt="avatar image" width="35">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-dark text-right"
                    aria-labelledby="navbarDropdownMenuLink-55" style="right: -150px">
                        <a class="small p-0" href="#">خوش آمدید {{auth()->user()->name}}</a>
                        <hr class="mt-1">
                        <a class="dropdown-item" href={{route('user.dashboard')}}>پنل</a>
                        <a class="dropdown-item" href={{url('/logout')}}>خروج</a>
                    </div>
                </li>
            </ul>
            @endauth
            @guest
                <ul class="navbar-nav text-light">
                    <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#LoginModal">وارد شوید</a></li>
                    <li class="nav-item"><a href={{route('register')}} class="nav-link">ثبت نام کنید</a></li>
                </ul>
                <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                @include('auth.loginModal')
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </nav>
    <!--Navbar -->
    <section class="content h-100 mt-5">
        @yield("content")
    </section>
    {{-- <nav class="navbar fixed-bottom navbar-dark elegant-color-dark justify-content-center">
        <a class="navbar-brand font-16" href="#">تمامی حقوق این وبسیایت متعلق به فردیس کلبه میباشد</a>
    </nav> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
</body>
</html>
