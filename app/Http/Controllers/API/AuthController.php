<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function __construct(){

   
        $this->middleware('outh:api',['except' => ['login', 'register']]);
    }
// validação feita na mão.
    function login(Request $request){
        $credentials = $request->validate([
            "login" => 'string|required|email',
            'senha' => 'string|required'
        ]);
//Auth::attempt($credentials)
        if(auth()->attempt($credentials)){

        }
    }

    function logout(Request $request){

    }
    function register(Request $request){

    }
}
