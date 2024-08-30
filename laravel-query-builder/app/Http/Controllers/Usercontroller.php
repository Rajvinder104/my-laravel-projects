<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function get_records()
    {
        $users = DB::table('students')
            // ->select('id','name','password')
            //->orderBy('age');
            //->simplePaginate(2);
            // ->paginate(2,['*'],'p',2); url vich name change karn lyi
            ->paginate(2);
        //->fragment('users');
        //->appends(['sort' => 'votes']);
        // ->get();
        // return $users ;
        // dd($users);
        // dump($users);
        return view('allusers', ['data' => $users]);
    }

    // public function index()
    // {
    //     $users = student::all();
    //     return $users;
    // }

    public function get_single_record($id)
    {
        $users = DB::table('students')->where('id', $id)->get();
        return view('view-user', ['data' => $users]);
    }


    public function add(Request $req)
    {
        $insert = DB::table('students')->insert(
            [
                'name' => $req->name,
                'age' => $req->age,
                'email' => $req->email,
                // 'password' => $req->password,
                // 'address' => $req->address,
                // 'phone' => $req->phone,
                'city' => $req->city,
                // [
                // $insert = DB::table('students')->upsert(
                // $insert = DB::table('students')->insert([
                // $insert = DB::table('students')->insertOrIgnore([

                //],
                // [
                //     'email'
                // ],
            ]
        );

        if ($insert) {
            return redirect()->route('home');
        } else {
            echo ' data Not inserted';
        }
    }

    public function insert(Request $req)
    {
        $insert = DB::table('cities')->insert(
            [
                'cities' => 'mohali',
            ]
        );
    }


    public function updatepage(string $id)
    {
        $users = DB::table('students')
            ->find($id);
        //->where('id', $id)->get();
        //  return $users ;
        return view('updateuser', ['data' => $users]);
    }


    public function updateuser(Request $req, $id)
    {
        $update = DB::table('students')
            ->where('id', $id)
            ->update(
                [
                    'name' => $req->name,
                    'age' => $req->age,
                    'email' => $req->email,
                    // 'password' => $req->password,
                    // 'address' => $req->address,
                    // 'phone' => $req->phone,
                ]
            );

        if ($update) {
            return redirect()->route('home');
        } else {
            echo 'not updated';
        }
    }



    public function deleteuser($id)
    {
        $insert = DB::table('students')
            ->where('id', $id)
            ->delete();
        if ($insert) {
            return  redirect()->route('home');
        } else {
            echo 'not delete';
        }
    }


    public function Showstudents()
    {
        $students = DB::table('students')
            ->select('students.*', 'cities.cities')
            ->join('cities', 'students.city', '=', 'cities.id')
            // ->select(DB::raw('count(*) as student_count'),'students.address')
            //->groupBy('address')
            //->where('students.name','=','harpreet')
            // ->where('cities.cities','=','muktsar')
            // ->having('students.address','=','punjab')
            // ->havingBetween('student_count',[6,7])
            // ->where('students.name','like','h%')
            //->count();
            ->paginate(3);
        return view('joindata', compact('students'));
        //  return $students ;
    }

    public function uniondata()
    {
        $lectueres = DB::table('lecturers')
            ->select('name', 'email', 'city')
            ->join('cities', 'lecturers.city', '=', 'cities.id')
            ->where('cities', '=', 'muktsar');

        $students = DB::table('students')
            ->union($lectueres)
            ->select('name', 'email', 'city')
            ->join('cities', 'students.city', '=', 'cities.id')
            ->where('cities', '=', 'bathinda')
            // ->toSql();
            ->get();

        return $students;
    }

    public function whendata()
    {
        $students = DB::table('students')
            ->when(true, function ($query) {
                $query->where('age', '>', 30);
            }, function ($query) {
                $query->where('age', '<', 30);
            })
            ->get();

        return $students;
    }


    public function validation(UserRequest $req)
    {
        return $req->all();
        // return $req->only(['name']);

        // $insert = DB::table('students')->insert(
        //     [
        //         'name' => $req->name,
        //         'age' => $req->age,
        //         'email' => $req->email,
        //         'password' => $req->password,
        //         'city' => $req->city,
        //     ]
        // );
    }
}
