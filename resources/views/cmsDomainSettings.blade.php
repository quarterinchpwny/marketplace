@extends('layouts.cmsnavigation')
@section('content')
<div class="row">
        <div class="col-10">
            <p class="fs-5 fw-bold text-white">Domain Settings</p> 
        </div>
        <div class="col-1">
          <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
        </div>
</div>
<div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">  
  <div class="row" style = "padding-left:15px; padding-top: 20px;">
    <div class="col-10">
      <label for="formControlInput" class="form-label fs-5 fw-bold">Domain URL</label>
    </div>
    <div class="row" style = "padding-top: 20px;">
      <div class="col-md-8">
        <input class="form-control form-control-lg" type="text" placeholder="domain.com.ph" aria-label=".form-control-lg" id="formControlInput"> 
      </div>
      <div class="col-md-3">
        <button class="btn btn-primary text-white" type="submit"style="background-color:#9D71BC;">Save</button>
      </div>
    </div>
  </div>
</div>        
@endsection