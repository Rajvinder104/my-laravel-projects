<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // $users = user::where('name', 'rajvinder')
        //    ->withWhereHas('post', function ($data) {
        //     $data->where('title', 'title one');
        // })->get();


        // $users = user::select(['*'])
        //                 ->withcount('post')
        //                 ->get();
        //return $users;

        $users = user::with('post')
            ->simplePaginate(3);

        return view('users', compact('users'));
    }


    public function create()
    {
        $user = user::find(2);

        $user->post()->createMany([
            [
                'title' => 'title test',
                'discription' => 'just testing...!'
            ],
            [
                'title' => 'title test 1',
                'discription' => 'just testing 1...!'
            ],
            [
                'title' => 'title test 2',
                'discription' => 'just testing 2...!'
            ],
        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        $users = user::with('post')
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
