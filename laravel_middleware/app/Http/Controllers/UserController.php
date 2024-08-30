<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);

        $users = User::create($data);
        if ($users) {
            return redirect()->route('login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }else{
            // return Redirect::back()->withErrors(['email' => 'These credentials do not match our records.']);
            return redirect()->route('login')->with('message','These credentials do not match our records');

        }
    }

    public function dashboardPage()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function innerpage()
    {
        return view('innerpage');
    }
}
