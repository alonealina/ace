<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AceController@index')->name('index');
Route::get('about', 'App\Http\Controllers\AceController@about')->name('about');
Route::get('news', 'App\Http\Controllers\AceController@news')->name('news');
Route::get('service', 'App\Http\Controllers\AceController@service')->name('service');
Route::get('graphic', 'App\Http\Controllers\AceController@graphic')->name('graphic');
Route::get('web', 'App\Http\Controllers\AceController@web')->name('web');
Route::get('media', 'App\Http\Controllers\AceController@media')->name('media');
Route::get('photo', 'App\Http\Controllers\AceController@photo')->name('photo');
Route::get('recruit', 'App\Http\Controllers\AceController@recruit')->name('recruit');
Route::get('contact', 'App\Http\Controllers\AceController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\AceController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\AceController@mail_comp')->name('mail_comp');

Route::get('admin/news_list', 'App\Http\Controllers\AceController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\AceController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\AceController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\AceController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\AceController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\AceController@news_delete')->name('admin.news_delete')->middleware('login');

// ログイン
Route::get('admin/login', function () {
    return view('login');
});
Route::POST('/admin_login', 'App\Http\Controllers\AceController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\AceController@logout')->name('admin.logout')->middleware('login');