<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function logIn(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if ($user = User::where('email', '=', $request->email)->with(['lawyer'])->first()) {
                return response()->json(['result' => 'success', 'token' => $user->createToken('User Token'), 'user' => $user], 200);
            }
        }

        return response()->json(['errors' => ['email' => ['Login Failed']]], 422);
    }
}
