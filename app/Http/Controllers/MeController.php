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
        $user = $request["user"];
        $user_id = $user["id"];
        $user = Http::get('https://6071de2050aaea001728541f.mockapi.io/users/'.$user_id);
        return $user;
    }
    
}
