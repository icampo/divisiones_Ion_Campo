<?php

namespace App\Http\Middleware;

use Closure;
use App\Divisiones;

class comprobar0
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
//        if (Divisiones::;
//        }


        return redirect('/incorrecto');
    }
}
