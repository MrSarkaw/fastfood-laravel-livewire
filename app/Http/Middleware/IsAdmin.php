<?php

namespace App\Http\Middleware;
use Illuminate\Support\facades\Auth;
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
        $user=Auth::user();
        if($user==null || !$user->IsAdmin()){
            return redirect('/');
        }else
        return $next($request);
    }
}
