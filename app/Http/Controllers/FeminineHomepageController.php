<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeminineController extends Controller
{
    public function index(){
        return view('feminine-homepage');
    }
}

