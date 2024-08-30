<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\student;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function student()
    {
        $contact = contact::with('getstudent')->get();
        return $contact;
    }
}
