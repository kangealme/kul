<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request) {
            $user = User::where('username', $request->username)->first();

            //Cek apakah username ada
            if ($user->username == $request->username) {
                //Jika username ada, cek password
                if (Hash::check($request->password, $user->password)) {
                }
            } else {
                //Jika username tidak ada
                return redirect('/')->with('pesan', 'Username tidak terdaftar');
            }
        }

        return $next($request);
    }
}
