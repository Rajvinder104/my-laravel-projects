<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $value = session('name');

        return view('welcome', compact('value'));

        // -----------------------------------------------------------------
        // $value  = session()->all();
        // echo '<pre>';
        // print_r($value);
        // echo '</pre>';


        //  ---------------------------------------------------------
        // $value = session()->get('name');

        // -----------------------------------------------------------------
        // if session is not exist
        // $value = session('name', "Hello");
        // echo $value;
        // -------------------------------------------------------------------
        // jaddo bhot sare session dye vicho ikk sessio nu dekhna hove
        // $value  = session()->except(["class"]);
        // echo '<pre>';
        // print_r($value);
        // echo '</pre>';

        // -------------------------------------------------------------------------
        // jaddo sirf ikk session hi dekhna hove
        // $value  = session()->only(["class"]);
        // echo '<pre>';
        // print_r($value);
        // echo '</pre>';

        // --------------------------------------------------------------------------------

        //   has session di key di value nu osss time hi print karega jaddo oss key vich koi value hovegyi nhi ta ehh false return kar deve ga
        // if (session()->has('name')) {
        //     $value = session()->get('name');
        //     echo $value;
        // } else {
        //     echo "Name Key Dons't Exists";
        // }

        // --------------------------------------------------------------------------------------------------------------------


        // exists session di key nu hamesha print karega chahhe oss key di value NULL hi hove
        // if (session()->exists('name')) {
        //     $value = session()->get('name');
        //     echo $value;
        // }else{
        //     echo "Name Key Dons't Exists";
        // }
    }
    public function storesession(Request $request)
    {
        // session(['name' => 'rajvinder']);
        session([
            'name' => 'rajvinder',
            'class' => 'Betach'
        ]);

        session()->flash('status', 'Session saved Successfully');

        //  session()->increment('count',$increment = 2);
        // session()->decrement('count',$increment = 2);
        // session()->regenerate();

        //  $request->session()->put("class", "Betach");

        return redirect('/');
    }
    public function deletesession()
    {
        // session()->forget(['name', 'class']);
        // session()->flush();
        session()->invalidate();
        return redirect('/');
    }
}
