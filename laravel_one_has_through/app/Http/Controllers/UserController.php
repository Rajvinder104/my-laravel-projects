<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with("company")
            ->with('PhoneNumber')
            ->get();

        // return $users ;

        // foreach ($users as $user) {
        //     echo $user->name . "<br>";
        //     echo $user->company->company_name . "<br>";
        //     echo $user->PhoneNumber->numbers . "<br>";
        //     echo '<hr>';
        // }

        return view('companies', compact('users'));
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
