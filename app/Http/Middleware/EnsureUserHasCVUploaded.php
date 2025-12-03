<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasCVUploaded
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();

        $cvNotUploaded = $user->cv_path_url() == null;
        if ($cvNotUploaded) {
            return redirect(route('profile'))->withErrors([
                'cv_path' => 'You need to upload a CV to continue'
            ]);
        }
        return $next($request);
    }
}
