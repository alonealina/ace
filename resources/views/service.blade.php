@extends('layouts.app_fw')

@section('page_name')
Service
@endsection



@section('content')
<div class="content">
    <div id="service_menu">
        <a href="#" onclick="clickservice1()" class="service_menu">Graphic Design</a>
        <a href="#" onclick="clickservice2()" class="service_menu">Web Design</a>
        <a href="#" onclick="clickservice3()" class="service_menu">Media Design</a>
        <a href="#" onclick="clickservice4()" class="service_menu">Photo + Movie</a>
    </div>

    <div id="service1">
        <div class="service_text">
            各種印刷物や販売促進に必要な広告デザインなど貴社のブランディングやイメージを<br>
            しっかりとヒアリングしご提案もさせて頂きながら作成します。<br>
            写真撮影やディテールデザインまで一貫して作成します。<br><br>
            各種パンフレット・名刺・ロゴデザイン・広告物・販売促進物など。<br><br>
            We will listen carefully to your company's branding and image and make proposals<br>
            for various printed materials and advertisement designs necessary for sales promotion.<br>
            We listen carefully to your company's branding and image and make suggestions.<br>
            We create all the necessary materials, including photography and detail design.<br><br>
            Various pamphlets, business cards, logo designs, advertisements, sales promotion materials, etc.
        </div>
        <img src="{{ asset('img/service1.png') }}" class="service_img">
    </div>

    <div id="service2">
        <div class="service_text">
            デザインにこだわると共にHP閲覧者の使い心地や利便性を考慮したWeb制作を心がけています。<br>
            ブログ機能や各種SNSとの連動などタイムリーに対象者に情報が届くような仕組みや管理の<br>
            し易さを考慮すると共に貴社の顔として相応しいWeb制作をいたします。<br><br>
            We are committed to web production that takes into consideration the comfort and convenience of the website viewer as well as the design.<br>
            We take into consideration the structure and ease of management to ensure that information reaches the target audience in a timely manner,<br>
            such as blog functions and linkage with various social networking services.<br>
            We also consider the ease of management and the blog function and various SNS links to ensure that the information reaches the target audience in a timely manner.        </div>
        <img src="{{ asset('img/service2.png') }}" class="service_img">
    </div>

    <div id="service3">
        <div class="service_text">
            弊社親会社の株式会社ANDYのアパレル販売PRの為に紙媒体（フリーペーパー）の<br>
            ANDY Fashion Pressを企画制作しております。<br>
            Web媒体のANDY Fashion WEBを制作運営しています。<br><br>
            We are planning and producing a paper media (free paper) for the apparel sales PR of our group company, ANDY Co.<br>
            ANDY Fashion Press is planned and produced for the apparel sales PR of our parent company, ANDY Co.<br>
            We also produce and operate the web-based medium ANDY Fashion WEB.
        </div>
        <img src="{{ asset('img/service3.png') }}" class="service_img">
    </div>

    <div id="service4">
        <div class="service_text">
        専用スタジオを運営しておりグループ会社製造販売のアパレル撮影を継続して行なっておりますので<br>
        カメラマンスタッフ・編集（レタッチ）スタッフ共に社内に所属しております。<br>
        各種広告撮影・商品撮影・プロフィール撮影など広くご対応可能です。<br>
        動画撮影（イメージビデオやプロモーションビデオ）もご対応可能です。<br><br>
        We operate a dedicated studio. We are continuously shooting apparel manufactured and sold by our group companies,<br>
        so both photographers and editing (retouching) staff belong to our company.<br>
        We have photographers and editing (retouching) staff in the company.<br>
        We can provide a wide range of services, including various types of advertising photography, product photography, and profile photography.<br>
        We can also handle video shooting (image videos and promotional videos).
        </div>
        <img src="{{ asset('img/service4.png') }}" class="service_img">
    </div>




</div>


<div class="bg_div service_bg"></div>
<script src="{{ asset('js/service.js') }}"></script>

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