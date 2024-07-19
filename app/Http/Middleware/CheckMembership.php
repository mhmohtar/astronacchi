<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckMembership
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
        // return $next($request);
        $user = Auth::user();
        $allowedArticles = 0;
        $allowedVideos = 0;

        switch ($user->type) {
            case 'A':
                $allowedArticles = 3;
                $allowedVideos = 3;
                break;
            case 'B':
                $allowedArticles = 10;
                $allowedVideos = 10;
                break;
            case 'C':
                $allowedArticles = 'all';
                $allowedVideos = 'all';
                break;
            default:
            $allowedVideos = 0; // Jika tipe user tidak dikenal, tidak mengizinkan video apapun
            break;
        }

        $request->merge(['allowedArticles' => $allowedArticles, 'allowedVideos' => $allowedVideos]);

        return $next($request);
    }
}
