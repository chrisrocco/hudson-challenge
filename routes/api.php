<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("contact", function(Request $request){

    $data = [
        'from_name' => $request->input('name'),
        'reply_to' => $request->input('email'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message')
    ];

    $contact_email = new \App\Mail\Contact($data);

    Mail::to(config('custom.contact_from_recipient'))
        ->send( $contact_email );
})->name("contact");

Route::post("studies", function (Request $request) {
    $params = [
        ''
    ];
});