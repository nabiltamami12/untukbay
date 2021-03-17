<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class isPetugas
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
        if (Auth::check()) {
        $user = Auth::user();
    if($user->role != 'admin') {
        return $next($request);
   }
    // return redirect('login');
return redirect('login');
   
    }
return redirect('login');
    
}
// abort(403);

}