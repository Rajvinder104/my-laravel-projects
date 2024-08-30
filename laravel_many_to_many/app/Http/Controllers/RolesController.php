<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = role::with('students')->get();
        return view('roles', compact('roles'));

        // return $role;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = role::find(1);
        $roles = [1, 4];
        //   $student->roles()->attach($roles);
        //  $student->roles()->detach($roles);
        $student->students()->sync($roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $roles = role::with('students')
            ->findOrFail($id);
        return view('viewuser', compact('roles'));
        //  return $role->students;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
