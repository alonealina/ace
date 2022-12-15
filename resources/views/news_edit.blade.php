@extends('layouts.app_admin')

@section('content')

<a href="{{ route('admin.news_list') }}"><img src="../../img/newslist_button.png" class=""></a>


<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="news_list_date">
            <div class="news_item_left">NEWS一覧</div>
        </div>
    </div>
    <form id="form" name="edit_form" action="{{ route('admin.news_update') }}" method="post" enctype="multipart/form-data">
        {{ Form::hidden('id', $news->id) }}
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_news_title">
            <div class="felx_form_title">タイトル</div>
            <div class="felx_form_content">
                {{ Form::text('title', old('title', $news->title), ['class' => 'form-control news_title_input', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">内容</div>
            <div class="felx_form_content">
                {{ Form::textarea('content', old('content', $news->content), ['class' => 'form-control news_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">公開設定</div>
            <div class="felx_form_content">
                <select name="release">
                    <option value="1" @if(old('release') == 1) selected @endif >公開</option>
                    <option value="none" 
                        @if(old('release') == 'none') selected 
                        @elseif(empty(old('release')) && $news->release_fle != 1) selected @endif >非公開</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center news_paginate">
            <a href="#" onclick="clickEditButton()"><img src="../../img/update_button.png" class="regist_button"></a>
        </div>

    </form>
</div>


@endsection


@section('content_ipad')

@endsection

