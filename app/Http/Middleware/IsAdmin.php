<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

 public function handle($request, Closure $next, ...$role)
 {
     if (Auth::check()){
        $user = [
            0 => Auth::user()->email
        ];
         if ($user == $role){
            return $next($request);
        }
        else{
            return response()->view('errors.503', [], 503);
        }
     }
     else{
        return redirect('login');
    }
    return $next($request);
 }
}
