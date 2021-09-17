@extends('layouts.cmsnavigation')
@section('content')   
  <div class="row">
    <div class="col-10">
      <p class="fs-5 fw-bold text-white">Edit Lawyer's Profile</p> 
    </div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
    </div>
  </div>
  <form  action ="" >
  <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-0"><img class="rounded-circle mt-2" width="100px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Lawyer</span><span class="text-black-50">lawyer@gmail.com</span><span> </span></div>
        <div class="text-center mt-3">
        <div class="file btn btn-sm upload text-white" style = "background-color: #9D71BC;">
							Upload
							<input class="uploadInput"type="file" name="file"/>
						</div>
        </div>   
      </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-0">
                <div class="row mt-2">
                    <div class="col-md-6">
                      <label class="labels"><b>First Name</b></label>
                      <input type="text" class="form-control " placeholder="First Name" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="labels"><b>Middle Name</b></label>
                      <input type="text" class="form-control " placeholder="Middle Name" value="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                      <label class="labels"><b> Last Name</b></label>
                      <input type="text" class="form-control " placeholder="Last Name" value="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                      <label class="labels"><b>About Me</b></label>
                      <textarea class="form-control" placeholder="About Me" id="floatingTextarea" rows="2"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-12">
                      <label class="labels"><b>Citizenship</b></label>
                      <input type="text" class="form-control " placeholder="Citizenship" value="">
                    </div>
                    <div class="col-md-12">
                      <label class="labels"><b>Year Admitted to the Bar</b></label>
                      <input type="text" class="form-control" placeholder="Year" value="">
                    </div>
                    <div class="col-md-12 mb-5">
                      <label class="labels"><b>IBP Chapter</b></label>
                      <input type="text" class="form-control" placeholder="IBP Chapter" value="">
                    </div>  
                </div>
                <div class="mt-1 text-center">
                  <button class="btn btn-sm profile-button text-white" style = "background-color: #9D71BC;" type="submit">Save Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 py-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <b>Education</b>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <table class="table table-hover table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Education</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lorem Ipsum dolor sit amet</td>
                            <td>
                              <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Select
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>  Delete</a></li>
                              </ul>
                            </div>
                            </td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <b>Work Experience</b>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <table class="table table-hover table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Work Experience</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lorem Ipsum dolor sit amet</td>
                            <td>
                              <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Select
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>  Delete</a></li>
                              </ul>
                            </div>
                            </td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <b>Specialization</b>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <table class="table table-hover table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Specialization</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lorem Ipsum dolor sit amet</td>
                            <td>
                              <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Select
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>  Delete</a></li>
                              </ul>
                            </div>
                            </td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              </div>   
            </div>
        </div>
    </div>
  </div> 
</form>
   
@endsection