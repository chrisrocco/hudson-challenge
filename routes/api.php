<?php

use App\UserFeed;
use Illuminate\Http\Request;
use App\User;

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

    /**
     * 1.) Create the study in database
     * 2.) Run a match operation to retrieve a list of users
     * 3.) Populate the user news feed
     */
});

Route::get("feed", function(Request $request){
    // returns entire feed, old and new
    $user = User::first();
    return $user->feed()->with('study')->get();
});

Route::get("feed/unread", function(Request $request){
    // returns items from the feed that are marked "unread"
    $user = User::first();
    return $user->feed()->with('study')->where('read', '=', 0)->get();
});

Route::get("feed/{feed}/mark-read", function($feed_id, Request $request){
    $feed = UserFeed::find($feed_id);
    if ($feed === null) {
        return response()->json([
            'status' => "FEED_NOT_FOUND",
            'msg' => "Damnit Chris"
        ], 404);
    }
    $feed->read = true;
    $feed->save();
});