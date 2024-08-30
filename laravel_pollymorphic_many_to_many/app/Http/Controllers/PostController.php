<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //  $post = Post::find(4);
        // return $post->tags;
        $post = Post::with('tags')->get();
        // $post = Post::with('tags')->find(3);

        // return $post;
        foreach ($post as $posts) {
            echo '<h2>' .$posts->title .'</h2>';
            echo '<p>' .$posts->discription .'</p>';

            foreach($posts->tags as $tag){
            echo '<small>' .$tag->tag_name . '/'.'</small>';

            }
        }
    }


    public function create()
    {
        // $post = Post::create([
        //    'title' => 'News title five',
        //    'discription' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum, fuga!'
        // ]);

        // $post->tags()->create([
        //     'tag_name' => 'Rohit Sharma',
        // ]);

        $post = Post::find(4);
        $post->tags()->attach([8, 3]);
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
