<?php
  
namespace App\Http\Middleware;
  
use Closure;
use App\Http\Controllers\HomeController;
   
class IsAdmin
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
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"You don't have admin access.");
    }
}