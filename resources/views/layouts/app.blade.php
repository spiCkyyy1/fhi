<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'F&H') }}</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff" />
    <!-- Retina iPad Touch Icon-->
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="http://placehold.it/144.png/000/fff"
    />
    <!-- Retina iPhone Touch Icon-->
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="http://placehold.it/114.png/000/fff"
    />
    <!-- Standard iPad Touch Icon-->
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="http://placehold.it/72.png/000/fff"
    />
    <!-- Standard iPhone Touch Icon-->
    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="http://placehold.it/57.png/000/fff"
    />

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <!-- Styles -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/unix.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    @yield('css')
</head>
<body @if(Route::currentRouteName() == 'register' || Route::currentRouteName() == 'login') class="bg-primary" @else class="" @endif>
@if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' ||
    Route::currentRouteName() == 'verification.notice' || Route::currentRouteName() == 'password.request' ||
    Route::currentRouteName() == 'password.reset' || Route::currentRouteName() == 'password.update')
    <div class="content-wrap">
        <div class="main">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
@else
    @include('layouts.navigation')
    @include('layouts.header')
    <div class="content-wrap">
        <div class="main">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
@endif
