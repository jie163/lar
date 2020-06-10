{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Weibo App</title>--}}
{{--</head>--}}
{{--<body>--}}
@extends('layouts.default')
{{--@section('title','主页')--}}

@section('content')
{{--<h1>主页</h1>--}}
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a> 的示例项目主页。
    </p>
    <p>
        一切，将从这里开始。
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
</div>
@stop
{{--</body>--}}
{{--</html>--}}
