<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Ace&Co.</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
        <div class="header_logo_div">
            <a class="logo_a_sp" href="{{ route('index') }}">
                <img src="{{ asset('img/header_logo.png') }}" class="logo_img_sp" alt="">
            </a>
        </div>
        <div class="left_menu_div">
            <a href="{{ route('about') }}" class="left_menu @if (\Route::currentRouteName() == 'about') current @endif">About</a>
            <a href="{{ route('news') }}" class="left_menu @if (\Route::currentRouteName() == 'news')    current @endif">News</a>
            <a href="{{ route('service') }}" class="left_menu @if (\Route::currentRouteName() == 'service') current @endif">Service</a>
            <a href="{{ route('recruit') }}" class="left_menu @if (\Route::currentRouteName() == 'recruit') current @endif">Recruit</a>
            <a href="{{ route('contact') }}" class="left_menu @if (\Route::currentRouteName() == 'contact') current @endif">Contact</a>
        </div>
        @if (\Route::currentRouteName() != 'index')
        <div class="page_name">
            <span id="page_name">@yield('page_name')</span>
            @if (\Route::currentRouteName() == 'service')
            <a href="#" id="close_btn" class="close_btn" onclick="clickCloseBtn()">CLOSE</a>
            @endif
        </div>
        @endif

        @yield('content')
        @yield('index_content')

        <footer>Copyright © Ace＆Co. All Rights Reserved.</footer>

        </body>
    </div>
    @else
    <div id="registration_sp">
        <body>
            <header class="header_sp" style="">
                @if (\Route::currentRouteName() != 'index')
                <a class="logo_a_sp" href="{{ route('index') }}">
                    <img src="{{ asset('img/header_logo.png') }}" class="logo_img_sp" alt="">
                </a>
                @endif
                <div class="hamburger-menu"
                @if (\Route::currentRouteName() == 'index') style="padding-top: 30px;" @endif >
                    <input type="checkbox" id="menu-btn-check" onclick="clickMenuBtn()">
                    <label for="menu-btn-check" class="menu-btn" id="menu-btn"><span></span></label>
                    <div class="menu-content" id="menu-content">
                        <input type="checkbox" id="menu-btn-check2" onclick="clickMenuBtn2()">
                        <label for="menu-btn-check2" class="menu-btn2" id="menu-btn2"><span></span></label>
                        <ul>
                            <li>
                                <a href="{{ route('about') }}" class="menu_content_sp">About</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}" class="menu_content_sp">News</a>
                            </li>
                            <li>
                            <a href="{{ route('service') }}" class="menu_content_sp">Service</a>
                            </li>
                            <li>
                            <a href="{{ route('recruit') }}" class="menu_content_sp">Recruit</a>
                            </li>
                            <li>
                            <a href="{{ route('contact') }}" class="menu_content_sp">Contact</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </header>
            <div class="header_page_flex_sp">
                @yield('header_page_sp')
            </div>
            @yield('content_sp')
            <footer>Copyright © Ace＆Co. All Rights Reserved.</footer>
        </body>
    </div>
    @if (\Route::currentRouteName() != 'shop_list') <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script> @endif
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick_js') }}"></script>

    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>