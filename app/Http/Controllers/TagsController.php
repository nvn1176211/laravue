<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index(){
        $allTags = DB::table('questions')
            ->get();
        dd($allTags);
    }

}
