<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "demomiddeleware";

        //we get age and check here
        if ($request->age && $request->age < 18) {
            //just returning custom view by redirect
            return redirect('redirect');
        }
        return $next($request);
    }
}
