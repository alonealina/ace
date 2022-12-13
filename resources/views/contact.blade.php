@extends('layouts.app_fw')

@section('page_name')
Contact
@endsection



@section('content')
<div class="content">
    <div class="contact_div">
        <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="contact_flex">
                <div class="contact_name">Name</div>
                <input class="form_text" placeholder="" name="name" type="text" id="name">
            </div>

            <div class="contact_flex">
                <div class="contact_name">Phone number</div>
                <input class="form_text" placeholder="" name="tel" type="text" id="tel">
            </div>

            <div class="contact_flex">
                <div class="contact_name">E-mail</div>
                <input class="form_text" placeholder="" name="mail" type="text" id="mail">
            </div>

            <div class="contact_flex">
                <div class="contact_name">Message</div>
                <textarea class="form_textarea" name="content" id="content"></textarea>
            </div>
            <div class="contact_flex">
                <div class=""></div>
                <div class="error_message" id="error_message"></div>
            </div>

            <div class="send_button">
                <a href="#" onclick="clickMailButton()">SEND</a>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>
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