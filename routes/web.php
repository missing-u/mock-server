<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::any('/echo', 'EchoController@echo');

Route::any('/echo/params/reflect', 'EchoController@reflect');

Route::any('/echo/header/reflect', 'EchoController@header_reflect');
