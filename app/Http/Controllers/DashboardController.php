<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Lawyer;



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
    public function lawyersProfile()
    {
        return view('cmsLawyersProfile');
    }
    public function editLawyersProfile()
    {
        return view('editLawyersProfile'/*,[
        'lawyer'=>Lawyer::find($lawyer_profile_id)]*/);
    }

    public function everyDayLaw()
    {
        return view('cmsEverydayLaw');
    }

    public function lawFirmPractice()
    {
        return view('cmsLawFirmPractice');
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

    public function test()
    {
        return view('test');
    }
}
