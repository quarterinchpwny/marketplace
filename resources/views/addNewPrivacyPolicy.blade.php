@extends('layouts.cmsnavigation')
@section('content')
<div class="row row1">
    <div class="col-10"></div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
    </div>
  </div>
  <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
    <div class="row row3" >
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="col-10">
          <h5>Add New Privacy Policy</h5>
        </div>
        <button class="btn me-md-2 text-white" type="button" style = "background-color: #9D71BC;" >Save</button>
        <a href="{{route ('cmsPrivacyPolicy')}}" ><button class="btn text-white" type="submit" style = "background-color: #9D71BC;">Cancel</button></a>
      </div>
    </div>
    <div class="row row4">
      <form method = "post" action="{{ route('privacypolicy.store')}}" >
        @csrf
        <div class="form-floating mb-3">
          <div class="form-floating">
              <input type="text" class="form-control"  name="title" placeholder="Enter title here">
              <label >Title</label>
              </div>
          </div>
          <div class="form-floating mb-3">
              
          <div class="form-floating">
            <textarea class="form-control" name = "body" id="floatingTextarea" style="height: 100px"></textarea>
            <label for="floatingTextarea">Content</label>
          </div>
          </div>
          <div class="form-floating mb-3">
              
          </div>
        <button type="submit"> Submit </button>
      </form>
    </div>
  </div>

@endsection