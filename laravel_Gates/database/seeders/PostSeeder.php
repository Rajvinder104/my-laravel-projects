<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'Title One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 1,

            ],
            [
                'title' => 'Title Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 3,

            ],
            [
                'title' => 'Title Three',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 2,

            ],
            [
                'title' => 'Title Four',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 3,

            ],
            [
                'title' => 'Title five',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 1,

            ],
            [
                'title' => 'Title seven',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 2,

            ],
            [
                'title' => 'Title eight',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'user_id' => 3,

            ],

        ]);

        $posts->each(
            function ($query) {
                Post::insert($query);
            }
        );
    }
}
