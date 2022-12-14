<?php

use App\Http\Controllers\TweetApiController;
use App\Http\Controllers\TweetController;
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

    return view('welcome', [ 'tweets' => $tweets]);
});

Route::resource('tweets', TweetController::class)->except('index', 'create', 'show', 'destroy');


Route::prefix('api')->group(function () {
    Route::apiResource('tweets', TweetApiController::class)->except('store', 'update', 'destroy');
});
