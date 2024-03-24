<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return response()->json($comments, 200, [], JSON_PRETTY_PRINT);
    }
}
