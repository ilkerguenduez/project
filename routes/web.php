<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);
Route::get('/comments',[CommentController::class,'index']);
Route::get('/posts/{post}/comments',[PostController::class,'comments']);
