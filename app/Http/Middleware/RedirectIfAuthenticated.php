<?php

namespace Cinema\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
<<<<<<< HEAD
            return redirect('/home');//osmangt1 redireccionar si es un usuaro valido (ej hacia /home)
=======
            return redirect('/home');
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
        }

        return $next($request);
    }
}
