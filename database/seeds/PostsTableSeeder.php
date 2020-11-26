<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Post::truncate();

        $admin->pages()->saveMany([
            new Post([
                'title' => 'Blog Post 1',
                'slug' => 'blog-post-1',
                'excerpt' => 'Blog Post 1 Excerpt',
                'body' => 'First post for this blog'
            ]),

            new Post([
                'title' => 'Blog Post 2',
                'slug' => 'blog-post-2',
                'excerpt' => 'Blog Post 2 Excerpt',
                'body' => 'Second post for this blog'
            ]),

            new Post([
                'title' => 'Blog Post 3',
                'slug' => 'blog-post-3',
                'excerpt' => 'Blog Post 3 Excerpt',
                'body' => 'Third post for this blog'
            ]),
        
        ]);
    }
}
