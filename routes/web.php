<?php

function registerPage( $name ){
    Route::get( "/$name", function() use ($name) {
        return view("pages.$name");
    })->name($name);
}

registerPage("profile");
registerPage("feed");
registerPage("network");
registerPage("home");

Route::get('/', function () {
    return redirect('home');
});