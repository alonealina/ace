@extends('layouts.app')

@section('content')
<div class="page_title_div">
    <div class="page_title">CONTACT</div>
</div>

<div class="mail_comp_div">
    お問い合わせありがとうございます。<br>
    返信が届くまでしばらくお待ちください。
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>


@endsection


@section('content_sp')
<div class="contact_div_sp">
    <div class="page_title_sp">CONTACT</div>
    <div class="mail_comp_div_sp">お問い合わせありがとうございます。<br>返信が届くまでしばらくお待ちください。</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>



@endsection