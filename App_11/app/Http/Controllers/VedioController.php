<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VedioController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):string
    {
        return "i am single action Condition ";
    }
}
