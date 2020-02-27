<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Post;
use Illuminate\Support\Facades\DB;
use App\Constants;

class PostController extends Controller
{
    // public function create(Post $request){
    public function create(Request $request){
        dd($request->hasFile('headingImg'));
        // dd($request->request);
        
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

    public function getPostHeading(Request $request){
        $postType = $request->postType;

        $oPosts = DB::table('posts')->select('id', 'type_id', 'heading', 'overall', 'heading_img_url', 'created_at', 'created_by', 'updated_at', 'updated_by')->where('type_id', $postType)->get();

        $posts = [];
        foreach($oPosts as $i){
            $posts[$i->id] = $i;
        }

        return json_encode((object)$posts);
    }

    public function detail(Request $request){
        $postId = $request->postId;
        $postDetail = DB::table('posts')
            ->select('content')
            ->where('id', $postId)
            ->first();
        echo json_encode($postDetail);die;
    }

}
