<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lawyer;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if ($user = User::create([
            'role_id' => 1,
            'status' => 1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])) {
            if ($lawyer = Lawyer::create([
                  'user_id' => $user->id,
                  'first_name' => $request->first_name,
                  'last_name' => $request->last_name,
              ])) {
                if ($user = User::where('email', '=', $request->email)->with(['lawyer'])->first()) {
                    return response()->json(['result' => 'success', 'token' => $user->createToken('User Token'), 'user' => $user], 200);
                }
            }
        }

        return response()->json(['errors' => ['email' => ['Register Failed']]], 422);
    }
}
