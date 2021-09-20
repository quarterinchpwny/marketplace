@extends('layouts.cmsnavigation')
@section('content')
  <div class="row row1">
    <div class="col-10">
      <p class="fs-5 fw-bold text-white">Homepage</p>
    </div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
    </div>
  </div>
  <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE;">
    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-link active" id="nav-banners-tab" data-bs-toggle="tab" href="#nav-banners" role="tab" aria-controls="nav-banners" aria-selected="true">Banners</a>
      <a class="nav-link" id="nav-logos-tab" data-bs-toggle="tab" href="#nav-logos" role="tab" aria-controls="nav-logos" aria-selected="false">Logos</a>
      <a class="nav-link" id="nav-practice-tab" data-bs-toggle="tab" href="#nav-practice" role="tab" aria-controls="nav-practice" aria-selected="false">Practice Areas</a>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-banners" role="tabpanel" aria-labelledby="nav-banners-tab">
        <div class="row">
          <div class="col-10"></div>
          <div class="col-2">
            <a href="{{url ('/addBanner') }}"><button type="button" class="btn text-white" style = "background-color: #9D71BC;">Add New Banner</button></a>
          </div>
        </div>
        <div class="row row4">
          <div class="table-responsive-xl ">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col" width="5%"">#</th>
                  <th scope="col" width="5%"">ID</th>
                  <th scope="col" width="15%"">Title</th>
                  <th scope="col" width="10%"">Image</th>
                  <th scope="col" width="10%"">From</th>
                  <th scope="col" width="10%"">To</th>
                  <th scope="col" width="15%"">Status</th>
                  <th scope="col" width="30%"">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Cell</td>
                  <td>Cell</td>
                  <td>Cell</td>
                  <td>Cell</td>
                  <td>Cell</td>
                  <td>Cell</td>
                  <td>
                      <div class="btn">
                      <a href="#"> <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</button></a>  
                      <a href="#" ><button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</button></a> 
                      <a href="#"> <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</button></a>
                    </div>
                  </td>
                </tr>
                
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            <div class="tab-pane fade" id="nav-logos" role="tabpanel" aria-labelledby="nav-logos-tab">
              <div class="row row3" >
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <div class="col-10">
                    <h5>Custom Logo</h5>
                  </div>
                  <button class="btn me-md-2 text-white" type="button" style = "background-color: #9D71BC;" >Save</button>
                  <a href="{{url ('/cms') }}" ><button class="btn text-white" type="button" style = "background-color: #9D71BC;">Cancel</button></a>
                </div>
              </div>
              <div class="row row4">
                <form action="">
                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Logo Status:</label>
                    <div class="col-sm-9">
                      <select class="form-select" aria-label="Default select">
                        <option selected="">Enable</option>
                        <option value="1">Disable</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Select Logo:</label>
                    <div class="col-sm-9">
                      <input class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alternate Text for Logo:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="colFormLabel" placeholder="Alternate text">
                    </div>
                  </div>
              </form>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-practice" role="tabpanel" aria-labelledby="nav-practice-tab">
             <div class="row row3" >
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <div class="col-10">
                    <h5>Select Practice Areas</h5>
                  </div>
                  <button class="btn me-md-2 text-white" type="button" style = "background-color: #9D71BC;" >Save</button>
                  <a href="{{url ('/cms') }}" ><button class="btn text-white" type="button" style = "background-color: #9D71BC;">Cancel</button></a>
                </div>
              </div>
              <div class="row row4">
                <div class="col-lg-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckChecked" checked="">
                    <label class="form-check-label" for="formCheckChecked">Personal and Family Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Labor Law</label>
                  </div>
                 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Civil Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Immigration Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Criminal Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Commercial Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Taxation Law</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                    <label class="form-check-label" for="formCheckDefault">Special Services</label>
                  </div>
                </div>
        </div>
      </div>
    </div>
  </div>
@endsection
