<?php

namespace App\Http\Controllers;
use App\Models\Onboarding;

use Illuminate\Http\Request;

class MarketplaceContentController extends Controller
{
    public function index(){
        return view('marketplace.landing');
    }
    public function step1(){
        return view('marketplace.step1');
    }
    public function onboarding(Request $request)
    {   
         if(!empty($request->onboarding_id)){
            $id = $request->input('onboarding_id');
            $onboarding = Onboarding::where('onboarding_id',$id)->update($request->except(['next_step','onboarding_id','_token']));
            return redirect(route($request->next_step,['onboarding_id'=>$id]));
        }
        else{
            
            $onboarding = Onboarding::create($request->except(['next_step']));
            return redirect(route($request->next_step,['onboarding_id'=>$onboarding->onboarding_id]));
        }
        
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
