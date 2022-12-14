@extends('layouts.app_fw')

@section('index_content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<div class="wrapper">
    <ul class="slider">
        <li class="slider-item slider-item01"></li>
        <li class="slider-item slider-item02"></li>
        <li class="slider-item slider-item03"></li>
    </ul>
</div>
@endsection


@section('content_sp')

<div class="wrapper">
    <ul class="slider">
        <li class="slider-item slider-item01_sp"></li>
        <li class="slider-item slider-item02_sp"></li>
        <li class="slider-item slider-item03_sp"></li>
    </ul>
</div>

<a class="sp_top_logo" href="{{ route('index') }}" id="sp_top_logo">
    <img src="{{ asset('img/sp_top_logo.png') }}" class="sp_top_img" alt="">
</a>

@endsection