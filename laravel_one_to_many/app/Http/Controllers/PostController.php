<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $users = post::with('user')->simplePaginate(3);

        // echo $users->title . '<br>';
        // echo $users->user->name . '<br>';
        // echo $users->user->email;
        // return $users ;

        return view('posts', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $users = post::with('post')
            ->find($id);
        return view('viewpost', compact('users'));
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
