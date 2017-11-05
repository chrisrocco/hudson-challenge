<?php

Route::get( "/profile", function() {

    $user = [
        "name" => "Chris Rocco"
    ];
    $feed = [
        [
            "name" => "test",
            "pmc_id" => "test",
            "date_published" => "11/11/11",
            "trait" => [
                "name" => "Cancer",
                "icon" => "icon-frown"
            ]
        ]
    ];
    $genes = [
        "ASFD81739",
        "VS834085T80",
        "IUBGS845879",
        "UWEO7Y5479",
    ];
    $traits = [
        [
            "name" => "Heart Disease",
            "icon" => "icon-heart"
        ]
    ];

    return view("pages.profile", [
        "user" => $user,
        "traits" => $traits,
        "feed" => $feed,
        "genes" => $genes
    ]);

})->name("profile");

Route::get( "/home", function() {
    return view("pages.home");
})->name("home");

Route::get('/', function () {
    return redirect('home');
});

// matched because of your ...