@extends('layouts.cmsnavigation')
@section('content')
  <div class="row row1">
    <div class="col-10"></div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
    </div>
  </div>
  <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
    <form method = "post" action="{{ route('disclaimer.store')}}" >
          @csrf
      <div class="row row3" >
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <div class="col-10">
            <h5>Add New Disclaimer</h5>
          </div>
          <button class="btn me-md-2 text-white" type="submit" style = "background-color: #9D71BC;" >Save</button>
          <a href="{{route ('cmsPrivacyPolicy')}}" ><button class="btn text-white" type="submit" style = "background-color: #9D71BC;">Cancel</button></a>
        </div>
      </div>
      <div class="row row4">
        <div class="col-11 mb-3">
          <label for="Input1" class="form-label">Title</label>
          <input type="text" class="form-control form-control-lg" id="Input1" name="title" placeholder="Enter title here">
        </div>     
        <div class="col-11 mb-3">
          <label for="Textarea1" class="form-label">Content</label>
          <textarea class="form-control" name = "body" id="Textarea1" rows="10"></textarea>
        </div>
      </div>
    </form>
  </div>
@endsection