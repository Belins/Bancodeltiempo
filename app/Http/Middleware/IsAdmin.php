<?php

namespace App\Http\Middleware;
use App\User;
use Auth;
use Closure;

class IsAdmin
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
        if (auth()->user()->isAdmin())
        {
            return redirect('admin');
        }
        else if(auth()->user()->bloqued == 1)
        {
            Auth::logout();
            return redirect('/');
        }
        else{
            return $next($request);  
        }
    }
}
