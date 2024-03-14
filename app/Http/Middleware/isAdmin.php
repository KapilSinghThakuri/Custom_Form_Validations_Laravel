<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = session('user_id');
        $user = User::where('id', $userId)->first();
        $role_id = $user->role_id;
        // dd($role_id);
        if( $role_id == 1 ){
            return $next($request);
        }
        return redirect()->back()->with('fails','You are not allowed to access Adminpage !!!');
    }
}
