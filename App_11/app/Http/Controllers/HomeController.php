<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function publicMessage(Request $request){
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


    function secretMessage(Request $request){
        return response()->json([
            'message'=>'This is a secret massage ',
        ]);
    }


    function downloadFile(Request $request){
        return response()->json([
            'message'=>'Download File',
        ]);
    }

    function messages(Request $request){
        return response()->json([
            'message'=>'this is a Message ?',
        ]);
    }

    function contectForBD(Request $request){
        $headers=$request->headers->all();
        return response()->json([
            'message'=>'You can see it only for banglaseh',
        ]); 

        
        // return response()->json([
        //     'message'=>'You can see it only for banglaseh',
        // ]);
    }
}
