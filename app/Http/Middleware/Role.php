<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ... $roles)
    {
        // untuk fitur switch role
        $canSwitchRole = ['admin', 'superadmin'];

        if (in_array('switch_role', $roles)) {
            foreach (session()->get('userRoles') as $role) {
                if (in_array($role, $canSwitchRole))
                    return $next($request);
            }
        }

        // cek rolenya boleh melanjutkan aksi atau tidak, jika tidak dilempar ke halaman depan
        foreach($roles as $role) {
            if (in_array($role, session()->get('userRoles')))
                    return $next($request);
        }

        return redirect(url('/'));
    }
}
