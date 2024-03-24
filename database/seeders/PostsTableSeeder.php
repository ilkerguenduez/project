<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->json();

        foreach($posts as $post){
            Post::create([
                'id' => $post['id'],
                'user_id' => $post['userId'],
                'title' => $post['title'],
                'body' => $post['body'],
            ]);
        }
    }
}
