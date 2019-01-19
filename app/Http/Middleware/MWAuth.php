<?php

namespace App\Http\Middleware;

use Closure;

use App\Model\user;

class MWAuth{

     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

     public function handle($request, Closure $next, $guard = null){

        $token = $request->header('Authorization');

        $user  = user::select("id")
                            ->where('token', $token)
                            ->get();

        if (count($user) > 0){
            return $next($request);
        }
        else{
            return response("Unathorized User");
        }

     }
}