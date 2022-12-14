@extends('layouts.app_fw')

@section('page_name')
NEWS
@endsection



@section('content')
<div class="content" style="padding-top:30px">
    <div id="news_list">
        <a href="#" onclick="clickNews(1)" class="news_column">2022.08.08　HPリニューアルオープン</a>
        <a href="#" onclick="clickNews(2)" class="news_column">2022.08.08　HPリニューアルオープン</a>
        <a href="#" onclick="clickNews(3)" class="news_column">2022.08.08　HPリニューアルオープン</a>
        <a href="#" onclick="clickNews(4)" class="news_column">2022.08.08　HPリニューアルオープン</a>
        <a href="#" onclick="clickNews(5)" class="news_column">2022.08.08　HPリニューアルオープン</a>
        <a href="#" onclick="clickNews(6)" class="news_column">2022.08.08　HPリニューアルオープン</a>
    </div>

    <div id="news_div">
        <div class="news_text">
            <div class="news_title">2022.08.08<br>HPリニューアルオープン</div>
            この度、株式会社Ace＆Co.はホームページをリニューアルオープンする運びとなりました。<br>今後ともAndyグループをよろしくお願いいたします。
        </div>
        <a href="#" id="news_list_btn" class="news_list_btn" onclick="clickNewsBtn()">NEWS一覧へ</a>
    </div>


</div>


<script src="{{ asset('js/news.js') }}"></script>

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