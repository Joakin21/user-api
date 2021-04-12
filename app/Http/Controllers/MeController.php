<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function show(Request $request)
    {
        $user_to_show = $request["user_id"];
        $user = Http::get('https://6071de2050aaea001728541f.mockapi.io/users/'.$user_to_show);
        return $user;
    }
    
    public function update(Request $request)
    {
        $user_to_update = $request["user_id"];
        $updated_user = $request["user"];
        Http::put(
            'https://6071de2050aaea001728541f.mockapi.io/users/'.$user_to_update."/", [
                "id" => $user_to_update,
                "name" => $updated_user['name'],
                "email" => $updated_user['email'],
                "password" => password_hash($updated_user['password'], PASSWORD_DEFAULT),
                "token" => $request["token"]
            ]
        );
        return response()->json(['message' => 'User updated successfully']);
    }


    
}
