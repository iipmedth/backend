<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function handle($request, Closure $next){
      $allowedOrigins = ['http://localhost:3000', 'https://ipmedth-groep4-web.herokuapp.com'];
      $origin = $_SERVER['HTTP_ORIGIN'];

      if (in_array($origin, $allowedOrigins)) {
          return $next($request)
              ->header('Access-Control-Allow-Origin', $origin)
              ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE')
              ->header('Access-Control-Allow-Headers', 'Content-Type');
      }

      return $next($request);
    }
}
