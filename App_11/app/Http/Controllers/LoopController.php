<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{

    function if_loops(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        return view('loop', ['result' => $sum]);
    }
    function switchloop(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        return view('loop', ['result' => $sum]);
    }




    // function loops(Request $request)
    // {
    //     $data = [
    //         ['name' => 'tomas', 'city' => 'sirajgonj'],
    //         ['name' => 'parvaz', 'city' => 'kishorgonj'],
    //         ['name' => 'rifat', 'city' => 'dhaka'],
    //     ];
    //     return view('loop', [ 'users'=> $data]);
    // }
}
