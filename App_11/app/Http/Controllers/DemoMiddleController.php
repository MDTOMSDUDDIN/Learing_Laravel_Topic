<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoMiddleController extends Controller
{
    // function Demo1(Request $request) {
    //    return "Hello Middleware 1";
    // }
    
    // function Demo2(Request $request) {
    //     return "Hello Middleware 2";
    // }

    // function Demo3(Request $request) {
    //     return "Hello Middleware 3";
    // }
    
    // function Demo4(Request $request) {
    //     return "Hello Middleware 4";
    // }

    function DemoAction(Request $request):array{

        return $request->header();
    }


    function Action(Request $request){
        return "middleware Lemitted throttle";
    }

}
