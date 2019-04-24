<?php

namespace App\Http\Middleware;

use App\Facades\Auth2;
use Closure;

class OnlyForAdminMiddleware
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
        // TODO: これでいいのかな？
        if ($request->session()->has('user_id')){
            if (Auth2::is_admin()){
                return $next($request);
            }
        }
        return redirect('home');
    }
}
