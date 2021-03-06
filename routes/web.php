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

Route::get('/',  'ApiController@SiteAction');
Route::get('/lk',  'ApiController@LKAction');
Route::get('/forum',  'ApiController@ForumAction');

Route::get('/auth',  'AuthController@auth');
Route::get('/reg',  'AuthController@reg');

Route::middleware('/auth')->group(function ()
    {
    Route::get('/logout',  'AuthController@logout');
    });


