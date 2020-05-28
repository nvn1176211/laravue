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

Route::post('/users/login', 'UsersController@login');
Route::post('/images/download', 'ImagesController@download');


Route::get('/test', function () {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/feed/trending");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // dd($ch);

    $res = curl_exec($ch);

    // dd(stripos($res, '<body') );
    $startIndex = stripos($res, '<body');
    $endtIndex = strripos($res, '/body>');
    dd(substr($res, $startIndex));
    
    
    // echo $res;die;
    dd($res);
    // dd($ch);

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
Route::post('/post/detail', 'PostController@detail');

Route::post('/tags/all', 'TagsController@index');