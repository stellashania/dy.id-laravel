<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
   /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @param  string|null  ...$guards
    * @return mixed
    */
   // public function handle(Request $request, Closure $next, ...$guards)
   // {
   //    $guards = empty($guards) ? [null] : $guards;

   //    foreach ($guards as $guard) {
   //       if (Auth::guard($guard)->check()) {
   //          // return redirect(RouteServiceProvider::LOGIN);
   //          // return redirect()->route('login');
   //       }
   //    }

   //    return $next($request);
   // }

   // public function handle($request, Closure $next, $guard = null)
   // {
   //    if (Auth::guard($guard)->check()) {
   //       $role = Auth::user()->role;

   //       switch ($role) {
   //          case 'admin':
   //             return redirect('/admin-index');
   //             break;
   //          case 'member':
   //             return redirect('/member-index');
   //             break;

   //          default:
   //             return redirect('/index');
   //             break;
   //       }
   //    }
   //    return $next($request);
   // }

   public function handle($request, Closure $next, $guard = null)
   {
      if (Auth::guard($guard)->check()) {

         return redirect('/');

         // if (!auth()->check) {
         //    return redirect('/login');
         // }

         // if (Auth::check()) {
         //    return redirect('/login');
         // }
      }
      return $next($request);
   }
}
