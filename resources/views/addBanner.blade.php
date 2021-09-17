@extends('layouts.cmsnavigation')
@section('content')
  <div class="row row1">
    <div class="col-10"></div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
    </div>
  </div>
  <div class="row row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mb-0">
        <div class="col-10">
          <h5>Add New Banner</h5>
        </div>
        <a href="{{url ('/') }}" ><button class="btn text-white" type="button" style = "background-color: #9D71BC;">Save</button></a>
        <a href="{{url ('/cms') }}" ><button class="btn text-white" type="button" style = "background-color: #9D71BC;">Cancel</button></a>
      </div>

    <div class="row row4">
      <form action="">
        <div class="row mb-3 mt-0">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Banner Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Banner Title">
          </div>
        </div>
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Banner Content:</label>
          <div class="col-sm-10">
            <textarea class="form-control" placeholder="Banner Content" id="formControlInput" style="height: 100px"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Select Banner:</label>
          <div class="col-sm-10">
           <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="row mb-3">
         <label for="colFormLabel" class="col-sm-2 col-form-label">Banner Title Position:</label>
         <div class="col-sm-9">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="radioInline" id="inlineRadioChecked" checked="">
            <label class="form-check-label" for="inlineRadioChecked">Left</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="radioInline" id="inlineRadioDefault">
            <label class="form-check-label" for="inlineRadioDefault">Center</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="radioInline" id="inlineRadioDefault">
            <label class="form-check-label" for="inlineRadioDefault">Right</label>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection