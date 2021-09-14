@extends('layouts.cmsnavigation')
@section('content')
<div class="row row1">
    <div class="col-10">
      <p class="fs-5 fw-bold text-white">Everyday Law</p>
    </div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
    </div>
  </div>
<div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
        <label class="form-check-label" for="flexSwitchCheckChecked">Allow Everyday Law to appear on your website</label>
    </div>
            <div class="table-responsive-xl">
                <table class="table caption-top table-striped table-hover">
                    <caption>List of Everyday Law</caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>
              </div>
        </div>       
@endsection