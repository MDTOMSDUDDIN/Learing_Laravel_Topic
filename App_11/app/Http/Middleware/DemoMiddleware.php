<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):response {
        // $key = $request->key;
        // if ($key == "xyz123") {
        //     return $next($request);
        // } else {
        //     return response()->json("invild");
        // }
        // $request->headers->add(['email'=>'tomas@gmail.com']);
        // $request->headers->replace(['email'=>'tomas@gmail.com']);
        $request->headers->remove('email');
        return $next($request);

        
    }
}
