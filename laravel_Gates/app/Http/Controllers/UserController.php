<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Psy\CodeCleaner\ReturnTypePass;

class UserController extends Controller
{


    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'age' => 'required|numeric',
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
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

        // if (Gate::allows('isAdmin')) {
        //     return view('dashboard');
        // } else {
        //     return redirect()->route('login');
        // }

        // Gate::authorize('isAdmin');
        // return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function viewprofile(int $user_id)
    {
        // dosra trika 
        Gate::authorize('view-profile', $user_id);
        $user = User::findorfail($user_id);
        return view('profile', compact('user'));
        abort(403);


        //  -------------------------------------------------------------------------------------------------------------
        // if (Gate::allows('view-profile',$user_id)) {
        //     $user = User::findorfail($user_id);
        //     return view('profile', compact('user'));
        // }else{
        //     return redirect()->route('dashboard');
        // }
    }
    public function viewpost(int $user_id)
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        // return $post ;
        return view('posts', compact('posts'));
    }

    public function UpdatePost($postid)
    {
        $post = Post::find($postid);
        $targetuser = $post->user_id;
        Gate::authorize('update-post', $targetuser);
        return $post;
    }
    public function DeletePost($postid)
    {
        $post = Post::find($postid);
        $targetuser = $post->user_id;
        Gate::authorize('update-post', $targetuser);
        return $post;
    }
}
