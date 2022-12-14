<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lawyer;
use Auth;
use Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\Onboarding;

class RegisterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
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
                    // return redirect('login')->withSuccess('Register Success.');

                    // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    //     return redirect()->intended('dashboard')->withSuccess('You are logged in!');
                    // }

                    if(!empty($request->onboarding_id)){

                        Onboarding::find($request->onboarding_id)->update($request->except(['next_step','_token']));

                    }
                    Auth::login($user);

                    return redirect(route('step7'))->withSuccess('Register Success.');
                }
            }
        }

        return redirect('register')->withError('Register details are not valid');
    }
}
