<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

Route::get('/test', function () {
    $rUrl = "images/upload/php_logo_256x256.png";
    $type = pathinfo($rUrl, PATHINFO_EXTENSION);
    $imgContent = file_get_contents($rUrl);
    $base64Img = 'data:image/' . $type . ';base64,' . base64_encode($imgContent);
    echo($base64Img);die;
});

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::post('/post/create', 'PostController@create');
Route::get('/post/get_post_types', 'PostController@getPostTypes');
Route::post('/post/get_post_heading', 'PostController@getPostHeading');