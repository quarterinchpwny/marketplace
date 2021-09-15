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
        return view('layouts.masculineTemplate');
    }
    public function sheesh(Request $req)
    {  
        return $req->input();
    }

    public function logIn(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('dashboard')->withSuccess('You are logged in!');
        }

        return redirect(route('login'))->withError('Login details are not valid');
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return redirect(route('login'))->withSuccess('You are logout successfully');
    }
}
