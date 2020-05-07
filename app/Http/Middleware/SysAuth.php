<?php

namespace App\Http\Middleware;

use Closure;

class SysAuth
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
        $account = session('role');
        if (!isset($account) || $account != 'system') {
            return redirect('/');
        }
        $response = $next($request);
        return $response;
    }
}
