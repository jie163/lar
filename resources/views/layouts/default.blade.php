<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
{{--    <link rel="stylesheet" href="/css/app.css">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="/">Weibo App</a>--}}
{{--        <ul class="navbar-nav justify-content-end">--}}
{{--            <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>--}}
{{--            <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
