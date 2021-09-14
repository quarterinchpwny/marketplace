@extends('layouts.cmsnavigation')
@section('content')   
<div class="row">
  <div class="col-10">
    <p class="fs-5 fw-bold text-white">Lawyer's Profile</p> 
  </div>
  <div class="col-1">
    <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
  </div>
</div>
<div class="row2 container-fluid"  style="height: 600px; background-color:#F8FFFE; ">
  <div class="row1 text-center" style="background-color:black">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>
    <div class="uploadButton">
    <button type="button" class="btn text-white btn-sm" style = "background-color: #9D71BC;">Upload Photo</button>
    </div>
  </div>
  
  <div class="col-3 container-fluid" style="background-color:yellow; width: 300px;">
    <div class="row ">
      <h5>Lawyer Name</h5>
      <input class="form-control form-control-sm" type="text" placeholder="Enter name" aria-label=".form-control-sm" style="padding-top:5px;">
    </div>
    <div class="row " style="padding-top:20px;">
      <h5>About Me</h5>
      <input class="form-control form-control-sm" type="text" placeholder="About" aria-label=".form-control-sm" style="padding-top:5px; height: 100px;">
    </div>
    <div class="row " style="padding-top:20px;">
      <h5>Year Admitted to the Bar</h5>
      <input class="form-control form-control-sm" type="text" placeholder="Year" aria-label=".form-control-sm" style="padding-top:5px;">
    </div> 
    <div class="row " style="padding-top:20px;">
      <h5>IBP Chapter</h5>
      <input class="form-control form-control-sm" type="text" placeholder="IBP Chapter" aria-label=".form-control-sm" style="padding-top:5px;">
    </div> 
  </div>
  <div class="col-5 container-fluid"style="background-color:blue; width: 300px;">
    <div class="row ">
      <h5>Education</h5>
      <input class="form-control form-control-sm" type="text" placeholder="Enter name" aria-label=".form-control-sm" style="padding-top:5px;">
    </div>
    <div class="row " style="padding-top:20px;">
      <h5>Work Experience</h5>
      <input class="form-control form-control-sm" type="text" placeholder="About" aria-label=".form-control-sm" style="padding-top:5px; height: 100px;">
    </div>
    <div class="row " style="padding-top:20px;">
      <h5>Specialization</h5>
      <input class="form-control form-control-sm" type="text" placeholder="About" aria-label=".form-control-sm" style="padding-top:5px; height: 100px;">
    </div>
  </div>
  <div class="row1 text-center" style="background-color:black">
    <div class="saveButton">
    <button type="button" class="btn text-white btn-sm" style = "background-color: #9D71BC;">Save</button>
    </div>
  </div>
</div> 
   
@endsection