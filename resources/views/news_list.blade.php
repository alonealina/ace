@extends('layouts.app_admin')

@section('content')

<div class="button_list_index">
    <a href="{{ route('admin.news_regist') }}"><img src="../../img/regist_button.png" class=""></a>
    <a href="{{ route('admin.logout') }}" class="logout_button"><img src="../../img/logout_button.png" class=""></a>
</div>

<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="news_list_date">
            <div class="news_item_left">NEWS一覧</div>
        </div>
        <div class="news_list_title">
            <div class="news_item_name"></div>
        </div>
        <div class="news_list_status">
            <div class="news_item_name_10px">ステータス</div>
        </div>
        <div class="news_list_buttonlist">
            <div class="news_item_name_10px">操作</div>
        </div>
    </div>
    @foreach($news_list as $news)
    <div class="news_list_column">
        <div class="news_list_date news_gray">
            <div class="news_item_left">{{ $news->notice_date }}</div>
        </div>
        <div class="news_list_title">
            <div class="news_item_left">{{ $news->title }}</div>
        </div>
        <div class="news_list_status news_gray">
            <div class="news_item_name">@if($news->release_flg == 1) 公開 @else 非公開 @endif</div>
        </div>
        <div class="news_list_button">
            <a href="{{ route('admin.news_edit', ['id' => $news['id']]) }}"><img src="../../img/edit_button.png" class="edit_button"></a>
        </div>
        <div class="news_list_button">
            <a href="{{ route('admin.news_delete', ['id' => $news['id']]) }}" onclick="return confirm('本当に削除しますか？')"><img src="../../img/delete_button.png" class="delete_button"></a>
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center news_paginate">
    {{ $news_list->links('pagination::bootstrap-4') }}
    </div>
</div>



@endsection