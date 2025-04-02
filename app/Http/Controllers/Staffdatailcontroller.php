<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Staffdatailcontroller extends Controller
{
    //
    function queries(){
        // $data = DB::table('Staffdatails')->get();                                          //select * from table To Fetch Data With Database
        // $data = DB::table('Staffdatails')->where('phonenumber','1234567190')->get();       //where clause
        //  $data = DB::table('Staffdatails')->where('phonenumber','1234567190')->first();       //first clause
        //  $data =[$data];


//hardcoded query

        // $data = DB::table('Staffdatails')->insert([                                     //insert data in table
        //     'name'=>'Rahul',
        //     'phonenumber'=>'1234567190',
        //     'address'=>'Delhi'
        // ]);

        //       $data = DB::table('Staffdatails')->where('id','12')->update([             //update data in table
        //     'name'=>'Rohan',
        //     'phonenumber'=>'1267567190',
        //     'address'=>'Mumbai'
        // ]);

            //   $data = DB::table('Staffdatails')->where('name','Rohan')->delete();       //delete data in table

             //you can display the msg after the query is executed by using the following code 
             // you can use (if) condition to display the msg

            //  if($data){                                      //insert condition
            //      echo "Data Inserted Successfully";
            //  }else{
            //      echo "Data Not Inserted";
            //  }


               //  if($data){                                      //Update condition
            //      echo "Data Update Successfully";
            //  }else{
            //      echo "Data Not Update";
            //  }

   //  if($data){                                      //Delete condition
            //      echo "Data Delete Successfully";
            //  }else{
            //      echo "Data Not Delete";
            //  }



        $data = DB::table('Staffdatails')->get();                                      //select * from table To Fetch Data With Database
        return view('staffdetails', ['detail'=>$data]);
    }
}
