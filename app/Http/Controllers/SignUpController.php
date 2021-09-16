<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredUser;

class SignUpController extends Controller
{
    public function add()
    {
        return view('lexcontent.lexsignup');
    }

    public function store(Request $request)
    {
        RegisteredUser::create($request->all());

        return redirect(route('main.NeutralHome'))->withSuccess('Success');
    }
}