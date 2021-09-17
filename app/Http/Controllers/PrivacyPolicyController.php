<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\Terms;
use App\Models\Disclaimer;
use Auth;

class PrivacyPolicyController extends Controller
{
    //Privacy Policy
    public function privacyPolicy()
    {
        return view('cmsPrivacyPolicy',
        ['privacypolicy'=>PrivacyPolicy::paginate(5)],
        ['termsofuse'=>Terms::paginate(5)],
        ['disclaimer'=>Disclaimer::paginate(5)] );   
    }
    public function addPrivacyPolicy()
    {
        return view('addNewPrivacyPolicy');
    }
    public function store(Request $request)
    {
        PrivacyPolicy::create( $request->all() + ['lawyer_profile_id'=>Auth::user()->lawyer->lawyer_profile_id ] ) ;
        return redirect(route ('cmsPrivacyPolicy'));
    }
    public function edit($policy_id)
    {
        return view('editPrivacyPolicy',[
            'policy'=>PrivacyPolicy::find($policy_id)
        ]);
    }
    public function update($policy_id, Request $request) 
    {
        PrivacyPolicy::find($policy_id)->update($request->all());
        return redirect(route ('cmsPrivacyPolicy'));
    }
    public function destroy($policy_id)
    {
        PrivacyPolicy::find($policy_id)->delete();
        return redirect(route ('cmsPrivacyPolicy'));
        
    }
    public function show($policy_id){
        return view('viewPrivacyPolicy',[
            'policy'=>PrivacyPolicy::find($policy_id)
        ]);
    }
    //Terms of Use
    public function createTermsofUse()
    {
        return view('createTerms');
    }
    public function storeTerms(Request $request)
    {
        Terms::create( $request->all() + ['lawyer_profile_id'=>Auth::user()->lawyer->lawyer_profile_id ] ) ;
        return redirect(route ('cmsPrivacyPolicy'));
    }
    public function editTerms($term_id)
    {
        return view('editTermsofUse',[
            'terms'=>Terms::find($term_id)
        ]);
    }
    public function updateTerms($term_id, Request $request)
    {
        Terms::find($term_id)->update($request->all());
        return redirect(route ('cmsPrivacyPolicy'));
    }
    public function destroyTerms($term_id)
    {
        Terms::find($term_id)->delete();
        return redirect(route ('cmsPrivacyPolicy'));
    }
    public function showTerms($term_id){
        return view('viewTermsofUse',[
            'terms'=>Terms::find($term_id)
        ]);
    }
    //Disclaimers
    public function createDisclaimer()
    {
        return view('createDisclaimers');
    }
    public function storeDisclaimer(Request $request)
    {
        Disclaimer::create( $request->all() + ['lawyer_profile_id'=>Auth::user()->lawyer->lawyer_profile_id ] ) ;
        return redirect(route ('cmsPrivacyPolicy'));
    }



}
