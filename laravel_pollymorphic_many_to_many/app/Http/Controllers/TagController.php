<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tags = Tag::with(['posts:title,discription','videos'])->get();
        $tags = Tag::with(['posts', 'videos'])->get();
        // return $tags;
        //return $tag;
        // echo "All Post :";
        // foreach($tag->posts as $post){
        //     echo "<h2>$post->title </h2>";
        //     echo "<p>$post->discription </p>";
        //     echo "<hr>";
        // }
        // echo "All Videos :";

        // foreach($tag->videos as $video){
        //     echo "<h2>$video->title </h2>";
        //     echo "<p>$video->url </p>";
        //     echo "<hr>";

        // }

        return view('tags', compact('tags'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tags = Tag::with(['posts', 'videos'])->find($id);
        return view('tagsposts', compact('tags'));
    }
    public function get_single_record($id)
    {
        $tags = Tag::with(['posts', 'videos'])->find($id);
        return view('tagsvideos', compact('tags'));
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
