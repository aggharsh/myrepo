<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    function upload(Request $request){
        $path=$request->file('file')->store('public');
        $file = explode("/", $path);
        $filename=$file[1];
        $img= new Image();
       $img->path = $filename;
        if($img->save()){
            return redirect('list');
        }else{
            return "Error";
        }
       
    }
    function Img(){
        $images = Image::all();
        return view('display',['imgpath'=>$images]);
    }
}
