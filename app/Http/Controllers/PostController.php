<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Post;
use Illuminate\Support\Facades\DB;
use App\Constants;

class PostController extends Controller
{
    public function create(Post $request){
        DB::table('posts')->insert([
            [
                'type_id' => $request->postType,
                'heading' => $request->postHeading,
                'content' => $request->postContent,
                'created_at' => date(Constants::F1_DATETIME),
            ],
        ]);
        echo 200;
    }

    public function getPostTypes(){
        $post_types = DB::table('post_types')->get();
        return $post_types;
    }

}
