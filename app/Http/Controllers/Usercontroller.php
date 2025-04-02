<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class Usercontroller extends Controller
{
    
    function adduser(Request $req){
        $req->validate([
            'name' => 'required | max:10 | min:3 | uppercase',
            'Email'=> 'required | Email',
            'City' => 'required | min:3 | max:10 | uppercase',
        ],[                                                       // custom message
            'name.required' => 'Name is required',
            'name.max' => 'Name must be less than 10 characters',
            'name.min' => 'Name must be greater than 3 characters',
            'Email.required' => 'Email is required',
            'Email.Email' => 'Email must be a valid email',
            'City.required' => 'City is required',
            'City.max' => 'City must be less than 10 characters',
            'City.min' => 'City must be greater than 3 characters',
            'name.uppercase'=> 'Name Must Be Required In Uppercase',
            'Email.uppercase'=> 'Email Must Be Required In Uppercase',
            'City.uppercase'=> 'City Must Be Required In Uppercase',
        ]) ;
        // return $req;
        echo $req->name . "<br>";
        echo $req->Email . "<br>"; // use print data from form
        echo $req->City;
    }

    function otherform(Request $other){
        $other->validate([
            'skill' => 'required',
            'gender'=> 'required',
            'city' => 'required',
            'age' => 'required',    
        ]) ;
        //  return $other;
        print_r($other->skill);
        echo "<br>";
        echo $other->gender . "<br>"; // use print data from form
        echo $other->city . "<br>";
        echo $other->age;
    }
 }
