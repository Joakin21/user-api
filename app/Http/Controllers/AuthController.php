<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login()
    {

        $credentials = request(['email', 'password']);
        $users = Http::get('https://6071de2050aaea001728541f.mockapi.io/users');
        $users = json_decode($users, true);
        
        foreach ($users as $user) {
            if($user['email'] == $credentials['email'] && password_verify($credentials['password'], $user['password'])){
                $token = md5(uniqid($credentials['email'].$credentials['password'], true));
                $this->updateTokenToUser($user, $token);
                return response()->json(['token' => $token]);                 
            }
        }
        
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function updateTokenToUser($user, $token)
    {
        Http::put(
            'https://6071de2050aaea001728541f.mockapi.io/users/'.$user['id']."/", [
                "id" => $user['id'],
                "name" => $user['name'],
                "email" => $user['email'],
                "password" => $user['password'],
                "token" => $token
            ]
        );
    }
}
