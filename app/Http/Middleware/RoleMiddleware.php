<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // mendapatkan user saat ini login
        $user = Auth::user();
        return $next($request);

        foreach ($roles as $roles) {
            // jika role yang di tentukan di route/web.php sama dengan role user saat ini
            //maka lanjutkan contorllaer nya 
            if ($roles == $user->role) {
                return $next($request);
            }
        }
        // jika role tidak sesuai, maka tampilkan halaman 403 (unauthorized)
        return abort(403);
    }
}
