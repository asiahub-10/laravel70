<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('admin.layouts.master');
});
Route::get('/home', function () {
    return view('admin.pages.home');
});
Route::get('/about', function () {
    return view('admin.pages.about');
});
