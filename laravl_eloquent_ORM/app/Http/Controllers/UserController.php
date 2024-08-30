<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = student::simplepaginate(3);
        // $user = student::all();
        //  $user = student::where('city', '=', 'Craigland')
        // ->orwhere('age', '<', 3)
        // ->select('*', 'email as UserEmail')
        // ->get();
        //->toSql();
        // ->toRawSql();
        //->dd();
        // ->ddRawSql();
        //  return $user;
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
        // $user = new student;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->age = $request->age;
        // $user->city = $request->city;

        // $user->save();
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required',
        ]);
        student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' =>  $request->age,
            'city' =>  $request->city,
        ]);

        return redirect()->route('user.index')
            ->with('message', 'New Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = student::findorfail($id);
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = student::findorfail($id);
        return view('updateuser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $user = student::find($id);

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->age = $request->age;
        // $user->city = $request->city;

        // $user->save();

        // student::where('is',$id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required',
        ]);
        student::find($id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'age' =>  $request->age,
                'city' =>  $request->city,
            ]);
        return redirect()->route('user.index')
            ->with('message', ' Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $users = student::find($id);
        // $users->delete();
        //student::truncate();
        student::destroy($id);

        return redirect()->route('user.index')
            ->with('message', ' Data Deleted Successfully');
    }
}
