<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Authenticate {

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
    public function __construct(Sentinel $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Sentinel::check()) {
            \Log::debug("User seems not authenticated ...");
            return redirect()->guest('admin/login')->with('error', 'Devi essere loggato per effettuare questa azione.');
        } else {
            return $next($request);
        }
    }

}
