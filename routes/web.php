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
    $allTags = DB::table('tags')
    ->leftJoin('questions', 'tags.id', '=', 'questions.tag')
    ->select('tags.id As tag_id', 'tags.name As tag_name', 'tags.logo_img_url', DB::raw("count(questions.id) As total"),  DB::raw("MAX(questions.created_at) AS latest"))
    ->groupBy('tags.id')
    ->get();
dd($allTags);
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