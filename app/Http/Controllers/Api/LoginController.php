<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request){
        $data = [

            'login' => 'login function',
        ];
    
            return response()->json($data,200);
    }
}
