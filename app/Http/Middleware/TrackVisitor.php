<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visiteur;

class TrackVisitor {
    public function handle(Request $request, Closure $next) {
        //Vérifie si l'utilisateur est nouveau en utilisant l'IP
        if (!$request->session()->has('visited')) {
            Visiteur::create([
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            $request->session()->put('visited', true);
        }

        return $next($request);
    }
}

