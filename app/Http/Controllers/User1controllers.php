<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User1controllers extends Controller
{
    //
    function get(){
        return "GET ROUTE METHOD";
    }
    function post(){
        return "POST ROUTE METHOD";
    }
    function put(){
        return "PUT ROUTE METHOD";
    }
    function delete(){
        return "DELETe ROUTE METHOD";
    }
    function patch(){
        return "PATCH ROUTE METHOD";
    }

    function GROUP1(){
        return "GROUP1 ROUTE METHOD";
    }

    function GROUP2(){
        return "GROUP2 ROUTE METHOD";
    }
}
