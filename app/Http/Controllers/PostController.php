<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json($posts);
    }

    public function comments(Post $post){
        $comments = $post->comments;
        return response()->json($comments);
    }
}
