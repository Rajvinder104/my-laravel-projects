<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::where('meta_data->name', 'LIKE', 'r%')->get();
        return $test;
        //    $test = Test::get();
        //   return $test;
        //    $test = Test::find(3);
        //   return $test->meta_data;
        //    $test = Test::find(3);
        //   return $test->meta_data['address']['state'];

        // $test = Test::orderby('meta_data->name')->get();
        // return $test;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Test();
        // $test->meta_data = [
        //     'name' => 'rajvinder',
        //     'email' => 'rajvinder@gmial.com',
        //     'phone' => 9876456789
        // ] ;
        // $test->save();

        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'vishal',
        //         'email' => 'vishal@gmial.com',
        //         'phone' => 686435678,
        //         'address' => [
        //             'streat' => '123 kk chonk',
        //             'city' => 'mohali',
        //             'state' => 'punjab'
        //         ]
        //     ]
        // ]);


        // ------------------------------------------------------------------------------------------------------------

        // how to update
        // $test = Test::where('id', 3)->update([
        //     'meta_data->address->city' => 'urang'
        // ]);

        // ---------------------------------------------------------------------------------------------------------
        // how to delete meta data nestted loop value

        $test = Test::find(2);

        $test->meta_data = collect($test->meta_data)->forget('email');
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
        //
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
