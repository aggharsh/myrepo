<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Userscontroller extends Controller
{
function index(){
    // $users= \App\Models\Users::all();              //To Get Data From Database
    // return $users;

     $name= DB::select("select * from users");         // this is the query to get all the data DATABASE from the users table
    return view("users", ['ABC'=>$name]);       // this is the view of the data
}
    // 
}
