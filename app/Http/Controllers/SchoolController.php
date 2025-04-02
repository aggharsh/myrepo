<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    function Adddata(Request $ABC){                //save data in database 
        $school = new School();
        $school->name=$ABC->name;
        $school->email=$ABC->email;
        $school->phonenumber=$ABC->phonenumber;
        $school->class=$ABC->class;
        $school->password=$ABC->password;
        $school->save();                                        // save the model to the database
        if($school){
            return redirect('li');
        }else{
            echo "No Data Found";
        }

    }

    function list(){

        $sc = School::paginate(6);
        
        return view('liststudent', ['school' => $sc]);
        
    }
    function delete($id){

        $isDeleted=School::destroy($id);                 // DEstroy the model given id
        if($isDeleted){
            return redirect('li');
        }

    }

    function update($id){
        
        $data=School::find($id);
        return view('updatelist',['list'=>$data]);
        
    }

    function editdata(Request $request, $id){
        $detail=School::find($id);
        $detail->name=$request->name;
        $detail->email=$request->email;
        $detail->phonenumber=$request->phonenumber;
        $detail->class=$request->class;
        $detail->password=$request->password;
        if($detail->save()){
            return redirect('li');
        }else{
            return "Error";
        }
    }
    function search(Request $Search){
        $sr= School::where('name','like',"%$Search->search%")->get();
        return view('liststudent',['school'=>$sr, 'Ha'=>$Search->search]);
    }

    function multidata(Request $MultiDelete){
        $return = School::destroy($MultiDelete->ids);
        if($return){
            return redirect('li');
        }else{
            return "Recort Not Deleted";
        }
    }
}
