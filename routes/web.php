<?php

use App\Models\Tweet;
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

    $tweets = Tweet::all();

    return view('welcome', [ 'tweet' => $tweets]);
});

Route::resource('tweets', \App\Http\Controllers\TweetController::class)->except('index');
