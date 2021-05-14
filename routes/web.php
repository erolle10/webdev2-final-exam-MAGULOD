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
    return view('index');
});

Route::get('/bible-study-requests', 'BsController@bslist');
Route::get('/bible-study-request-form', 'BsController@bsform');
Route::post('/bible-study-create-form', 'BsController@createform');
Route::get('/thank-you', 'BsController@thankyou');
