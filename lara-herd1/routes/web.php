<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Route::get('/', function () {
//     return view('layouts.single-page');
// });
Route::get('/price', function () {
    return view('pages.price');
})->name('price');
Route::get('/plan', function () {
    return view('pages.compare-plan');
})->name('compare-plan');
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('signin');
