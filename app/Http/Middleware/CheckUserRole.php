<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
