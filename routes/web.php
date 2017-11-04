<?php

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/products', function () {
    $products = require __DIR__ . '/../database/products.php';
    return view('pages.products', [
        'products' => $products
    ]);
})->name('products');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/products/{id}', function($id){
    $products = require __DIR__ . '/../database/products.php';
    $product = $products[$id];
    return view('pages.shop-single', [
        'product' => $product
    ]);
})->name('product');

Route::get("/phpinfo", function(){
    var_dump(phpinfo());
});

Route::group([ "prefix" => "mail-previews" ], function(){
    Route::get("/contact", function(){
        return new \App\Mail\Contact([
            "from_name" => "Chris Rocco",
            "message" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "reply_to" => "chris.rocco7@gmail.com"
        ]);
    });
});