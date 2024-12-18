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

     function sessionPut(Request $request){
      $request->session()->put('user_email',"mdtomasuddin@gmail.com");
        return "store in the session Data successfully";
    }
    function sessionget(Request $request){
        $value= $request->session()->get('user_email',"Default");
        return $value;
    }


    function log(Request $request){
        Log::error($request->url());
        return "laravel log ";
    }

  
    function dd(Request $request){
       $num1=10;
    //   dd( $num1=10);
      $num2=20;
      dd($sum=$num1+$num2);
       return $sum;
    }

    function demo6(Request $request){
     try{
        $num1=10;
        $num2=20;
        $sum=$num1+$num2;
         return $sum;
     }catch(Exception $e){
        Log::error($e);
        return "fail";
     }
    }
}
