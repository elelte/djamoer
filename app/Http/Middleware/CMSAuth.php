<?php

namespace App\Http\Middleware;

use Closure;

class CMSAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // // check if the request is from mobile device
        // if ($request->name == "ganalpratama@gmail.com") {
        //     return redirect('google.com');
        // }
        
        // return redirect("cms/login");
        // // return $next($request);
        return response($request);
    }
}
