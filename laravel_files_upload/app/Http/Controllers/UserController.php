<?php

namespace App\Http\Controllers;

use App\Models\user as ModelsUser;
use App\Models\Usermodel;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::get();
        return view('file-upload', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');

        // return $request ;
        //  $file->move(public_path('uploads', $file->getClientOriginalName()));
        $request->validate([
            'photo' => 'required|image|max:3000'
        ]);

        // user::create([
        //     'file_name' => $file->getClientOriginalName(),
        // ]);


        // $extension = $file->getClientOriginalExtension();
        // $extension = $file->extension();
        // $extension = $file->hashName();
        // $extension = $file->getClientMimeType();
        // $extension = $file->getSize(); // in bytes
        // return $extension ;

        // $path = $request->file('photo')->store('images','public');

        // $filename = time() . '_' . $file->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $filename, 'public');
        // return $path;
        $path = $request->file('photo')->store('images', 'public');

        user::create([
            'file_name' => $path,
        ]);

        return redirect()->route('user.index')->with('status', 'User image Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = user::find($id);
        return view('update-file', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = user::find($id);

        if ($request->hasFile('photo')) {

            $image_path = public_path('storage' . $user->file_name);

            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            $path = $request->photo->store('images', 'public');
            $user->file_name = $path;
            $user->save();
            return redirect()->route('user.index')->with('status', 'User Image Data Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::find($id);
        $user->delete();

        $image_path = public_path('storage' . $user->file_name);

        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        return redirect()->route('user.index')->with('status', 'User Image Data Deleted Successfully');
    }
}
