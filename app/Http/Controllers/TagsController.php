<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index(){
        $allTags = DB::table('tags')
        ->leftJoin('questions', 'tags.id', '=', 'questions.tag')
        ->select('tags.id As tag_id', 'tags.name As tag_name', DB::raw("count(questions.id) As total"))
        ->groupBy('tags.id')
        ->get();
        echo json_encode($allTags);
    }

}
