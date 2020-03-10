<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index(){
        $allTags = DB::table('questions')
        ->join('tags', 'tags.id', '=', 'questions.tag')
        ->select('tags.name', DB::raw("count(*) as count"))
        ->groupBy('tags.name')
        ->get();
        echo json_encode($allTags);
    }

}
