<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PrivacyPolicy;


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
    public function storePrivacyPolicy(Request $request)
    {
        PrivacyPolicy::create($request->all());
        return redirect(route('cmsPrivacyPolicy'))->withSuccess('Success');
    } 
    public function addPrivacyPolicy()
    {
        return view('addNewPrivacyPolicy');
    }

    
    
    public function addPostLawUpdate(){
        return view('addNewPostLawUpdate');
    }

    public function contactUs()
    {
        return view('cmsContactUs');
    }
    public function addNewAddress()
    {
        return view('addAddress');
    }
    public function storeAddress(Request $request)
    {
        Contact::create($request->all());
        return redirect(route('cmsContactUs'))->withSuccess('Success');
    } 

    public function domainSettings()
    {
        return view('cmsDomainSettings');
    }
}
