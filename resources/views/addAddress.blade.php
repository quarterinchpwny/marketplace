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
          <h5>Add New Address</h5>
        </div>
        <button class="btn me-md-2 text-white" type="button" style = "background-color: #9D71BC;" >Save</button>
        <a href="{{url ('/cmsContactUs') }}" ><button class="btn text-white" type="submit" style = "background-color: #9D71BC;">Cancel</button></a>
      </div>
    </div>
    <div class="row row4">
      <form method = "post" action="{{ route('addAddress.post')}}" >
        @csrf
        <div class="form-floating mb-3">
            
            <input type="text" class="form-control" id="floatingInput" name="address" placeholder="title">
            <label for="floatingInput">Address</label>
        </div>
        <div class="form-floating mb-3">
             
            <input type="text" class="form-control" id="floatingInput1" name="telephone" placeholder="title">
            <label for="floatingInput1">Telephone</label>
        </div>
        <div class="form-floating mb-3">
             
            <input type="text" class="form-control" id="floatingInput2" name="email" placeholder="title">
            <label for="floatingInput2">Email</label>
        </div>
        <button type="submit"> Submit </button>
      </form>
    </div>
  </div>

@endsection