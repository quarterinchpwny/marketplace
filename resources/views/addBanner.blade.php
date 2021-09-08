@extends('layouts.cmsnavigation')
@section('content')
<div class="row row3" >
    <div class="col-10">
      <h5>New Banner</h5>
    </div>
      <div class="col-1">
        <button type="button" class="d-flex btn btn-primary text-white">Save</button>
      </div>
      <div class="col-1">
        <button type="button" class="d-flex btn btn-primary text-white">Cancel</button>
      </div>
  </div>
  <div class="row row4">
    <form action="">
      <div class="row mb-3">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Banner Title:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="colFormLabel" placeholder="Banner Title">
        </div>
      </div>
      <div class="row mb-3">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Banner Content:</label>
        <div class="col-sm-9">
          <textarea class="form-control" placeholder="Banner Content" id="formControlInput" style="height: 100px"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Select Banner:</label>
        <div class="col-sm-9">
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
      </div>

      
    
    </form>
  </div>
@endsection