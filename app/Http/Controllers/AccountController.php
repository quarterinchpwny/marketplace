<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use Auth;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $lawyer;

    public function __construct(Lawyer $lawyer)
    {
        $this->lawyer = $lawyer;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('account');
    }

    public function updateAccount(Request $request)
    {
        Auth::user()->lawyer()->update($request->except(['_token']));

        return redirect()->back()->withSuccess('Account Updated');
    }
}
