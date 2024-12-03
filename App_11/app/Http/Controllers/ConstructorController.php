<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends Controller
{

    public function __construct()
    {
        $this->middleware('DEMO');
    }


    function demo1(Request $request){
        return $request->header();
    }
}
