<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AceController@index')->name('index');
Route::get('about', 'App\Http\Controllers\AceController@about')->name('about');
Route::get('recruit', 'App\Http\Controllers\AceController@recruit')->name('recruit');