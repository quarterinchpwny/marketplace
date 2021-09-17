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
          <h5>View  Terms of Use</h5>
        </div>
        <a href="{{route ('cmsPrivacyPolicy')}}" ><button class="btn text-white" type="submit" style = "background-color: #9D71BC;">Cancel</button></a>
      </div>
    </div>
    <div class="row row4">
      <div class="col-12 mt-2"><h5> {{$terms->title}}</h5></div>
      </br>
      <div class="col-12 mt-2">{{$terms->body}}</div>
    </div>
  </div>
@endsection