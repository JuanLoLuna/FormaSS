<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'MainController@show');
Route::get('/EndOfForm', 'MainController@showEnd');

Route::post('/FormInfo','FormInfoController@store');