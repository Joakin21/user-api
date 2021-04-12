<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JwtMiddleware
{
    /**
     * Verificación de Token de autenticación par el endpoint: Me.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        $header = $request->header('Authorization');
        if($header == null){
            return response() -> json(['error' => 'Token not found']);
        }

        $token = explode(" ", $header)[1];
        $users = Http::get('https://6071de2050aaea001728541f.mockapi.io/users');
        $users = json_decode($users, true);

        foreach ($users as $user) {
            
            if($user['token'] == $token){
                $request->replace(['user_id' => $user["id"],'user' => $request ->all(), 'token' => $token]);
                return $next($request); 
            }
        }
        return response()->json(["error"=>'Invalid token']);
    }
}
