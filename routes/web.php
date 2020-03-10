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
    // $allTags = DB::table(DB::raw('SELECT tags.name FROM questions INNER JOIN tags ON tags.id = questions.tag'))
    // ->select('name')
    // ->get();

    $allTags = DB::query()->fromSub(function ($query) {
        $query->from('questions')->select('tags.name')->join('tags', 'tags.id', '=', 'questions.tag');
    }, 'a')->get();
    
    // $allTags = DB::table('questions')
    // ->join('tags', 'tags.id', '=', 'questions.tag')
    // ->select('tags.name')
    // ->get();
    // $allTags = DB::select(
    //     `
    //     SELECT count(*) AS total, a.name
    //     FROM
    //     (
    //     SELECT tags.name FROM questions
    //     INNER JOIN tags ON tags.id = questions.tag
    //     ) a
    //     GROUP BY a.name
    //     `
    // );
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