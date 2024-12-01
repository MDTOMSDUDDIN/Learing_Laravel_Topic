<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoActionController extends Controller
{
    function logs(Request $request): int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::notice($sum);
        return $sum;
    }
    function log1(Request $request): int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::info($sum);
        return $sum;
    }
    function log2(Request $request): int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::emergency($sum);
        return $sum;
    }
    function log3(Request $request): int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::error($sum);
        return $sum;
    }
    function log4(Request $request): int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::warning($sum);
        return $sum;
    }
}
