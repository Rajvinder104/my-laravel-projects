<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\user;
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
                'title' => 'title one',
                'discription' => 'hello world how are you',
                'user_id' => 1
            ],
            [
                'title' => 'title two',
                'discription' => 'hello world how are you',
                'user_id' => 2
            ],
            [
                'title' => 'title three',
                'discription' => 'hello world how are you',
                'user_id' => 3
            ],
            [
                'title' => 'title four',
                'discription' => 'hello world how are you',
                'user_id' => 4
            ],
            [
                'title' => 'title five',
                'discription' => 'hello world how are you',
                'user_id' => 5
            ],
        ]);

        $posts->each(function($post){
            post::insert($post);
        });
    }
}
