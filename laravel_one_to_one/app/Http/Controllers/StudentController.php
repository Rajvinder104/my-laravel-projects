<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        // $students = student::get();

        //  $students = student::with('secondtable')->where('gender','F')->get();
        //  $students = student::with('secondtable')->get();
        // $students = student::with('secondtable')->find(2);
        $students = student::where('gender', 'M')
            ->withWhereHas('secondtable', function ($query) {
                $query->where('city', 'abohar');
            })->get();


        // return $students;


        //  $students = student::where('gender', 'M')
        //  ->withWhereHas('secondtable', function ($query) {
        //      $query->where('city', 'malout');
        //  })->find(4);
        // echo  $students->name . '<br>';
        // echo  $students->secondtable->email . '<br>';
        // echo  $students->secondtable->phone . '<br>';

        return view('one-to-one', compact('students'));
    }

    public function create()
    {
        $students = student::create([
            'name' => 'manish',
            'age' => 43,
            'gender' => 'M',
        ]);
        $students->secondtable()->create([
            'email' => 'manish@gmail.com',
            'phone' => 356615,
            'city' => 'abohar',

        ]);
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
