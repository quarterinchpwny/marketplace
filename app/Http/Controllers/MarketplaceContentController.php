<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MarketplaceContentController extends Controller
{
    public function index(){
        return view('marketplace.landing');
    }
    public function step1(){
        return view('marketplace.step1');
    }
    public function step2(){
        return view('marketplace.step2');
    }
    public function step3(){
        return view('marketplace.step3');
    }
    public function step4(){
        return view('marketplace.step4');
    }
    public function step5(){
        return view('marketplace.step5');
    }
    public function step6(){
        return view('marketplace.step6');
    }
    public function step7(){
        return view('marketplace.step7');
    }
    public function step8(){
        return view('marketplace.step8');
    }

}
