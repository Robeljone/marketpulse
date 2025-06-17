<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Moderna/about');
});
Route::get('/index', function () {
    return view('Moderna/index');
});
Route::get('/about', function () {
    return view('Moderna/about');
});
Route::get('/services', function () {
    return view('Moderna/services');
});
Route::get('/portfolio', function () {
    return view('Moderna/portfolio');
});
Route::get('/team', function () {
    return view('Moderna/team');
});
Route::get('/blog', function () {
    return view('Moderna/blog');
});
Route::get('/contact', function () {
    return view('Moderna/contact');
});
