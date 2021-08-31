<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('auth.login');
    }

    public function logIn(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if ($user = User::where('email', '=', $request->email)->with(['lawyer'])->first()) {
                return redirect()->intended('dashboard')->withSuccess('You are logged in!');
            }
        }

        return redirect('login')->withError('Login details are not valid');
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }
}
