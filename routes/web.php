<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AceController@index')->name('index');
Route::get('about', 'App\Http\Controllers\AceController@about')->name('about');
Route::get('recruit', 'App\Http\Controllers\AceController@recruit')->name('recruit');
Route::get('contact', 'App\Http\Controllers\AceController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\AceController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\AceController@mail_comp')->name('mail_comp');
