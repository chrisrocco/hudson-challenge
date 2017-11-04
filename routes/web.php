<?php

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/feed', function(){
    return view("pages.feed");
})->name("feed");