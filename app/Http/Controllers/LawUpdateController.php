<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LawUpdate;
use Auth;

class LawUpdateController extends Controller
{
    //Law Updates
    public function lawUpdates()
    {
        return view('cmsLawUpdate',[
            'lawupdates'=>LawUpdate::paginate(10)
        ]);
    }
    public function addPostLawUpdate(){
        return view('addNewPostLawUpdate');
    }
    public function storeLawUpdate(Request $request)
    {
        LawUpdate::create( $request->all() + ['lawyer_profile_id'=>Auth::user()->lawyer->lawyer_profile_id ] ) ;
        return redirect(route ('cmsLawUpdate'));        
    }
   /* public function editLawUpdate($law_update_id)
    {
        return view('editLawUpdate',[
            'lawupdate'=>LawUpdate::find($law_update_id)
        ]);
    }
    public function updateLawUpdate($law_update_id, Request $request) 
    {
        LawUpdate::find($law_update_id)->update($request->all());
        return redirect(route ('cmsLawUpdate'));
    }*/

}
