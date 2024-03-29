<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        try {
            if (auth()->check() && auth()->user()->isAdmin()) {
                return $next($request);
            } else {
                throw new HttpException(403);
            }
        } catch (HttpException $e) {
            // Handle the 403 exception here
            return response()->view('errors.403', [], 403);
        }
    }
}
