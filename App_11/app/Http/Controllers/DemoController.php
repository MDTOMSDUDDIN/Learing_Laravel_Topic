<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1()
    {
        // return "hello";
        // return 100;
        // return null;
        // return true;
        //return ['a','b','c','d'];
        // return array([
        //     "name" => "tomas",
        //     "deperment" => "computer science and technology",
        //     "semester : " => "8th runing ",
        //     "roll" => 576630,
        // ]);

        // return response()->json([
        //     "name" => "tomas",
        //     "deperment" => "computer science and technology",
        //     "semester : " => "8th runing ",
        //     "roll" => 576630,
        // ],210);


        //return response()->file("image.png");
        // return response()->download("image.png");

    }




    //  function demo2(Request $request){

    //return $request->query();         //request quary string sending

    // $name=$request->name;       //parametter pass 
    // $city=$request->city;
    // return $city ;
    //}

    // function demo3(Request $request){           //pass json body 
    //     return $request->input();
    // }


    // function demo4(Request $request){                
    //     return $request->header();           //request header 
    // }


    function  fileData(Request $request)
    {

        $file = $request->file('photo');
        $file->move(public_path('uploads'), $file->getClientOriginalName());
        return response()->json(['success' => 'File uploaded successfully']);
    }
}
