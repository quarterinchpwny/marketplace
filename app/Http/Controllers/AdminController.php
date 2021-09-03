<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function lawyers()
    {
        return view('admin.lawyers', [
            'users' => User::paginate(10)
        ]);
    }

    public function templates()
    {
        return view('admin.templates');
    }
}
