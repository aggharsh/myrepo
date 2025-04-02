<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplodeController extends Controller
{
    function uplode(Request $ABC){
        // $path= $ABC->file('file')->store('public');
        // return $path;

        $path= $ABC->file('file')->store('public');
        $filename=explode("/" ,$path);
        $file=$filename[1];
        // dd($file);
        return view('displayimage',['path'=>$file]);
        

  
    }
}

