<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{

    public function index()
    {
        $students = student::with('roles')->get();
        //return $students->roles;

        // foreach ($students as $student) {
        //     echo $student->name . '<br>';
        //     echo $student->email . '<br>';
        //     // echo $student->roles . '<br>';


        //     foreach ($student->roles as $role) {
        //         echo $role->role_name . '<br>';
        //     }

        //     echo '<hr>';

        // }
        return view('students', compact('students'));
    }


    public function create()
    {
        $student = student::find(2);
        $roles = [1, 4];
        //   $student->roles()->attach($roles);
        //  $student->roles()->detach($roles);
        $student->roles()->sync($roles);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
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
