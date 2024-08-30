<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            // 'password_confirmation' => 'required|confirmed',
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
        }
    }

    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function innerpage()
    {
        if (Auth::check()) {
            return view('innerpage');
        } else {
            return redirect()->route('login');
        }
    }
}
