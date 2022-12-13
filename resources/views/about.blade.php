@extends('layouts.app_fw')

@section('page_name')
About
@endsection



@section('content')
<div class="content">
    <div class="flex_div">
        <div class="about_30"><span class="content_name">Company Name</span><br>株式会社Ace＆Co.</div>
        <div class="about_50"><span class="content_name">Office</span><br>〒542-0077<br>大阪府大阪市中央区道頓堀1丁目東3-20<br>EMPORIUM BLDG 3F</div>
        <div class="about_20"><span class="content_name">President</span><br>酒向智也</div>
    </div>
    <div class="flex_div">
        <div class="about_30"><span class="content_name">E-mail</span><br>info@ace-co.press</div>
        <div class="about_30"><span class="content_name">Tel</span><br>06-6484-3861</div>
        <div class="about_30"><span class="content_name">Capital</span><br>1,000万円</div>
    </div>
    <div class="column_div">
        <span class="content_name">Fields of Activities</span><br>グラフィックデザイン/ウェブデザイン/メディアデザイン/写真・動画撮影、編集/SNSマネジメント
    </div>
</div>

<div class="bg_div about_bg"></div>
@endsection


@section('content_sp')

<div class="wrapper">
    <ul class="slider">
        <li class="slider-item slider-item01_sp"></li>
        <li class="slider-item slider-item02_sp"></li>
        <li class="slider-item slider-item03_sp"></li>
    </ul>
</div>



@endsection