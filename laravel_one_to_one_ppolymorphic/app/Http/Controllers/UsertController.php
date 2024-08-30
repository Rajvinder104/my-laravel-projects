<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsertController extends Controller
{

    public function index()
    {
        // $user = User::with('image')->get();
        // return $user;
        $users = User::with('image')->get();
        return view('users', compact('users'));

        // $user = User::get();
        // return $user ;
    }

    public function create()
    {
        $users = User::find(5);


        $users->image()->create([
            'url' => url('images/image1.jpg')
        ]);
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
        $posts = User::with('posts')->findOrFail($id);
        return view('posts', compact('posts'));
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
