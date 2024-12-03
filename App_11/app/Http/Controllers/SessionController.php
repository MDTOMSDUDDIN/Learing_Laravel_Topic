<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function sessionPut(Request $request):bool{
         $email=$request->email;
        $request->session()->put('useremail',$email);
        return true;
    }

    function sessionGet(Request $request):string{
        return $request->session()->get('useremail','default');
    }

    function sessionPull(Request $request):string{
        return $request->session()->pull('useremail','default');
    }

    function sessionforget(Request $request){
        return $request->session()->forget('useremail','forget');
    }
    function sessionFlus(Request $request){
        return $request->session()->flush();
    }
   
}
