<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cmscontroller extends Controller
{
    public function index(){
        return view('cms');
    }
        public function addBanner(){
            return view('addBanner');
        }

    public function registration(){
        return view('cmsRegistration');
    }
    public function privacyPolicy(){
        return view('cmsPrivacyPolicy');
    }
    public function lawyersBlog(){
        return view('cmsLawyersBlog');
    }
        public function addPost(){
            return view('addNewPost');
        }
    public function contactUs(){
        return view('cmsContactUs');
    }
}
