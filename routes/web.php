<?php

Route::get( "/profile", function() {

    $user = [
        "name" => "Chris Rocco"
    ];
    $traits = [
        [
            "name" => "Heart Disease",
            "icon" => "icon-heart"
        ],
        [
            "name" => "Ugliness",
            "icon" => "icon-frown"
        ]
    ];

    return view("pages.profile", [
        "user" => $user,
        "traits" => $traits
    ]);

})->name("profile");

Route::get( "/feed", function() {
    return view("pages.feed");
})->name("feed");

Route::get( "/network", function() {
    return view("pages.network");
})->name("network");

Route::get( "/home", function() {
    return view("pages.home");
})->name("home");

Route::get('/', function () {
    return redirect('home');
});