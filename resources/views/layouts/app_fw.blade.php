<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Ace&Co.</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
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
            <a href="" class="left_menu @if (\Route::currentRouteName() == 'news')    current @endif">News</a>
            <a href="" class="left_menu @if (\Route::currentRouteName() == 'service') current @endif">Service</a>
            <a href="{{ route('recruit') }}" class="left_menu @if (\Route::currentRouteName() == 'recruit') current @endif">Recruit</a>
            <a href="{{ route('contact') }}" class="left_menu @if (\Route::currentRouteName() == 'contact') current @endif">Contact</a>
        </div>
        @if (\Route::currentRouteName() != 'index')
        <div class="page_name">
            @yield('page_name')
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
                <a class="logo_a_sp" href="{{ route('index') }}">
                    <img src="{{ asset('img/fw_logo_sp.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn" 
                    @if (\Route::currentRouteName() != 'fw.index')
                    style="margin-top: 10px;"
                    @endif
                    ><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href="{{ route('fw.index') }}" class="menu_content_sp">TOP</a>
                            </li>
                            <li>
                                <a href ="#" class="menu_content_sp" onclick="clickMenuCompanyButton();">
                                    Dress catalog <img src="{{ asset('img/down.png') }}" id="down_company" class="down"><img src="{{ asset('img/up.png') }}" id="up_company" class="up">
                                </a>
                                <div id="menu_company_sp">
                                    <a href="{{ route('fw.catalog_gms') }}" class="menu_a_sp">GLAMOROUS</a>
                                    <a href="{{ route('fw.catalog_an') }}" class="menu_a_sp">an</a>
                                    <a href="{{ route('fw.catalog_andy') }}" class="menu_a_sp">Andy</a>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('fw.new_dress') }}" class="menu_content_sp">Bijou Dress with Asuka Ayano</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.cover_girl') }}" class="menu_content_sp">CoverGirl</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.pickup') }}" class="menu_content_sp">Pick up AndyModel</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.enrike') }}" class="menu_content_sp">Interview 'Eri Ogawa'</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.santa') }}" class="menu_content_sp">Christmas Costume</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.susukino') }}" class="menu_content_sp">It Girl in Susukino</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.bar') }}" class="menu_content_sp">Girls Public Bar EMO</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.birthday') }}" class="menu_content_sp">Birthday Event Report</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.maria_rui') }}" class="menu_content_sp">Conversation Rui&Maria</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.dress_restaurant') }}" class="menu_content_sp">Restaurant 'Rinascere Dojima'</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.pet') }}" class="menu_content_sp">beloved dog</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.zara') }}" class="menu_content_sp">special contents「ZARA」</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.archivio') }}" class="menu_content_sp">special contents「archivio」</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.fortune') }}" class="menu_content_sp">Divination</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.spur') }}" class="menu_content_sp">Dress shop 'SPUR'</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.famous') }}" class="menu_content_sp">Recommended store</a>
                            </li>
                            <li>
                            <a href="{{ route('fw.sns') }}" class="menu_content_sp">SNS</a>
                            </li>
                        </ul>

                        <!-- <a href ="#" class="menu_content_sp bn_sp" onclick="clickMenuLinkButton();">
                            Back Number <img src="{{ asset('img/down.png') }}" id="down_link" class="down"><img src="{{ asset('img/up.png') }}" id="up_link" class="up">
                        </a>
                        <div id="menu_link_sp">
                            <a href="" class="back_number_a">2022 AUTUMN / WINTER 07</a>
                            <a href="" class="back_number_a">2022 AUTUMN 06</a>
                            <a href="" class="back_number_a">2022 AUTUMN 05</a>
                            <a href="" class="back_number_a">2022 AUTUMN 04</a>
                        </div> -->

                        <div class="sp_menu_flex">
                            <a href="http://www.andy-dress.com/" class="sp_menu_a" target="_blank">Andy official web shop</a>
                            <a href="{{ route('fw.shop_list') }}" class="sp_menu_a">Shop List</a>
                            <a href="{{ route('fw.model_list') }}" class="sp_menu_a">Model List</a>
                            <a href="{{ route('fw.contact') }}" class="sp_menu_a">Contact</a>
                            <a href="{{ route('fw.about') }}" class="sp_menu_a">About</a>
                        </div>
                        <div class="header_icon_list">
                            <a href="https://twitter.com/andy_dressbrand" target="_blank"><img src="{{ asset('img/twitter.png') }}" class="header_icon_sp"></a>
                            <a href="https://www.facebook.com/andy.co.ltd?hc_location=stream" target="_blank"><img src="{{ asset('img/facebook.png') }}" class="header_icon_sp"></a>
                            <a href="https://line.me/R/ti/p/%40xat.0000158641.pf4" target="_blank"><img src="{{ asset('img/line.png') }}" class="header_icon_sp"></a>
                            <a href="https://www.instagram.com/andy_fashion_press" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="header_icon_sp"></a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_page_flex_sp">
                @yield('header_page_sp')
            </div>
            @yield('content_sp')

        </body>
    </div>
    @if (\Route::currentRouteName() != 'fw.shop_list') <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script> @endif
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick_fw.js') }}"></script>

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