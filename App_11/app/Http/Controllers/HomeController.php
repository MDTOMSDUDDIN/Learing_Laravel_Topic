<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function publicMessage(){
        return response()->json([
            'message'=>'This is a public massage ',
        ]);
    }

    function PrivateMessage(Request $request){
    //    if(!auth()->check()){
    //     return response()->json([
    //         'message'=>'Not authentic users',
    //     ]);
    //    }
        return response()->json([
            'message'=>'This is a Private massage ',
        ]);
    }


    function secretMessage(){
        return response()->json([
            'message'=>'This is a secret massage ',
        ]);
    }
}
