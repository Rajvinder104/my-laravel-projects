<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = user::simplepaginate(10);

        return view('home', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'user_name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'salary' => 'required|numeric',
            'dob' => 'required',
            'password' => 'required',

        ]);

        user::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'age' => $request->age,
            'salary' => $request->salary,
            'dob' => $request->dob,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('message', 'New user Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = user::find($id);

        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = user::find($id);

        return view('updateuser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$user = user::find($id);

        $request->validate([

            'user_name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'salary' => 'required|numeric',
            'dob' => 'required',
            'password' => 'required',

        ]);

        $user =  user::find($id)
            ->update([
                'user_name' => $request->user_name,
                'email' => $request->email,
                'age' => $request->age,
                'salary' => $request->salary,
                'dob' => $request->dob,
                'password' => $request->password,
            ]);

        return redirect()->route('user.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::find($id)->delete();
        return redirect()->route('user.index')->with('message', 'Data Deleted Successfully');

    }
}
