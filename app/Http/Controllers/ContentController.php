<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        return view('content.landing');
        }

    
    public function step1(){
        return view('content.step1');
        }

    public function step2(){
        return view('content.step2');
        }
    public function step3(){
        return view('content.step3');
        }
    public function step4(){
        return view('content.step4');
        }
    public function step5(){
        return view('content.step5');
        }
    public function step6(){
        return view('content.step6');
        }
    public function step7(){
        return view('content.step7');
        }
    public function step8(){
        return view('content.step8');
        }

}
