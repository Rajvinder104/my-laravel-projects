<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class TestController extends Controller
{
    public function get_records(Request $request)
    {
        $users = DB::table('Tests')
            ->paginate(1);

        return view('index', ['data' => $users]);

    }
}
