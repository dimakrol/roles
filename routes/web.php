<?php


use App\Mail\YoursNotification;

Route::get('/', function () {
//    Auth::loginUsingId(1);
//    return view('welcome');

});

//Route::get('/mail', function () {
//    Mail::later(20, 'mails.notify', [],function ($message) {
//        $message->from('us@example.com', 'Laravel');
//
//        $message->to('foo@example.com');
//    });
//});
//
//Route::get('/newMail', function () {
//    $when = \Carbon\Carbon::now()->addSeconds(20);
////    dd($when);
//
//    Mail::to('john@example.com')->later($when, new YoursNotification('Corolla'));
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
