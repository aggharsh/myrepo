<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Studentcontroller extends Controller
{
    //
    function student(){
        $student= \App\Models\Students::all();
        return view('student',['students'=>$student]);

    }
}
