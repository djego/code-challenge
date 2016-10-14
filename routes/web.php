<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','ShortenController@index');

Route::post('/shorten_url','ShortenController@process');

Route::get('/stats','ShortenController@stats');

Route::get('/{code}','ShortenController@shortUrl');

