<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Requests;

    class NeutralHomeController extends Controller
    {
        public function index(){
            return view('main.NeutralHomecopy');
        }
    }