<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Symfony\Component\HttpFoundation\Response;
Use Illuminate\Support\Facades\Session;


class Sessionmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next):Response
    {
        view()->share('email',session('email'));
        view()->share('password',session('password'));
        view()->share('role',session('role'));

        return $next($request);
    }
}
