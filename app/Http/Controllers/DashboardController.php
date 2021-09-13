<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cms');
    }

    public function services()
    {
        return view('cmsServices');
    }

    public function addBanner()
    {
        return view('addBanner');
    }

    public function registration()
    {
        return view('cmsRegistration');
    }

    public function lawyersBlog()
    {
        return view('cmsLawyersBlog');
    }

    public function lawUpdates()
    {
        return view('cmsLawUpdate');
    }

    public function lawyersProfile()
    {
        return view('cmsLawyersProfile');
    }

    public function everyDayLaw()
    {
        return view('cmsEverydayLaw');
    }

    public function lawFirmPractice()
    {
        return view('cmsLawFirmPractice');
    }

    public function privacyPolicy()
    {
        return view('cmsPrivacyPolicy');
    }

    public function addPost()
    {
        return view('addNewPost');
    }
    
    public function addPostLawUpdate(){
        return view('addNewPostLawUpdate');
    }

    public function contactUs()
    {
        return view('cmsContactUs');
    }

    public function domainSettings()
    {
        return view('cmsDomainSettings');
    }
}
