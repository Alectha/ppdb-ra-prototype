<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var User $user */
        $user = Auth::user();
        
        if (!$user || !$user->isAdmin()) {
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Hanya admin yang bisa mengakses halaman ini'
            ]);
        }

        return $next($request);
    }
}
