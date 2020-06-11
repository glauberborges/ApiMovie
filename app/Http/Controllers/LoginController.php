<?php

namespace App\Http\Controllers;

use function array_merge;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credencial  = $request->all(["email", "password"]);

        if (!Auth::attempt($credencial)){
            return response()->json("invalid credentials", 401);
        }

        $user = $request->user();
        $user->token =  $user->createtoken('token')->accessToken;

        return response()->json($user, 200);

    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json("lou", 200);

    }
}
