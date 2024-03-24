<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/comments');
        $comments = $response->json();

        foreach($comments as $comment){
            Comment::create([
                'id' => $comment['id'],
                'post_id' => $comment['postId'],
                'name' => $comment['name'],
                'email' => $comment['email'],
                'body' => $comment['body'],
            ]);
        }

    }
}
