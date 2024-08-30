<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('comments')->get();
        return view('videos' , compact('videos'));

        // -------------------------------------------------------------
        //    // return $video->comments;
        //    echo $video->title ;
        //    echo $video->url ;
        //     foreach($video->comments as $comment){

        //         echo $comment->detail ;
        //         echo '<hr>' ;
        //     }

        //  -------------------------------------------------------------
        // $videos = Video::with('bestcomment')->find(2);
        // return $videos ;

        // ---------------------------------------------------
        // return view('videos', compact('videos'));
        // $video = Video::find(2);
        // return $video->leastcomment ;
    }


    public function create()
    {
        $video = Video::find(3);

        $video->comments()->create([
            'detail' => 'Ghaint Video',
        ]);
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
        $videos = Video::with('comments')->find($id);
        return view('videoscomment' , compact('videos'));
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
