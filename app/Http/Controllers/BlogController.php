<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;

class BlogController extends Controller
{
  
    public function lawyersBlog()
    {
        return view('cmsLawyersBlog', [
            'blogs'=>Blog::paginate(10)
        ]);
    }
    public function addPost()
    {
        return view('addNewPost');
    }
    public function store(Request $request){
        Blog::create( $request->all() + ['lawyer_profile_id'=>Auth::user()->lawyer->lawyer_profile_id ] ) ;
        return redirect(route ('cmsLawyersBlog'));
            
    }
    public function edit($blog_id){
        return view('editLawyerBlog',[
            'blog'=>Blog::find($blog_id)
        ]);
    }
    public function update($blog_id, Request $request) {
        Blog::find($blog_id)->update($request->all());
        return redirect(route ('cmsLawyersBlog'));
    }
    public function destroy($blog_id){
        Blog::find($blog_id)->delete();
        return redirect(route ('cmsLawyersBlog'));
    }
    public function show($blog_id){
        return view('viewLawyersBlog',[
            'blog'=>Blog::find($blog_id)
        ]);
    }
}
