<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['message' => 'Hey there SOSO']);
});


// // get all tweets
// Route::get('/tweets', function() {
//     //
// });

// // show the form to create a tweet

// Route::get('/create-tweet', function() {
//     //
// });


// // create a tweet - handle form for creating a tweet
// Route::post('tweets', function() {
//     //
// });

// // update a tweet

// Route::put('/tweets/{tweetId}', function($tweetId) {
//     //
// });

// // delete a tweet
// Route::delete('/tweets/{tweetId}', function ($tweetId) {

// });
