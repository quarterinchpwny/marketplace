<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <div id="viewport">
 
    <!-- Sidebar -->
    
    <div class="flex-column flex-shrink-0 p-3 sidebar-nav offcanvas offcanvas-start" style=" background-color: #F8FFFE;" >
      <div id="line" style="background-color: #F4512C;"></div>

      <ul class="nav  flex-column mb-auto">
       
        <li class="nav-item">
          <a href="#" class="nav-link active" >Homepage</a>
        </li> 
        <li class="nav-item">
          <a href="#" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Registration Section</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Lawyer's Blog Section</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Law Update Section</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Everyday Law</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Lawyer's Profile</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Law Firm Practice</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Contact Us Page</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Domain Settings</a>
        </li>
      </ul>
      <div class="sidenav-logo">
        Powered by <img src="{{ URL::to('/') }}/cms-graphics/lexmeet logo.png" alt="Powered by LexMeet" width="100" height="13">  
      </div>
    </div>
     <!--Top Navigation--> 
     <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #F8FFFE;">
      <div class="container-fluid">
        <a class="align-items-center mb-3 mb-md-0 me-md-auto sidebar-logo" href="#"><img src="{{ URL::to('/') }}/cms-graphics/logo1.png" alt="Rizal Law Office" width="190" height="35"></a>
       
        <ul class="nav navbar-nav ml-end">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
      <!--Main content-->
      <div class="page-content-wrapper">
      <div class="container-fluid content">
        <div class="row">
          <div class="col-sm-3">
            <button type="button" class="d-flex btn btn-primary text-white">Preview</button>
          </div>
        </div>
        <div class="row2 container-fluid"  style="height: 570px; background-color:#F8FFFE; ">
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
                  <button type="button" class="btn btn-primary text-white">Add New Banner</button>
                </div>
              </div>
              <div class="row row4">
                <div class="table-responsive-xl ">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                  
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
                        <td><div class="dropdown">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div></td>
                      
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td><div class="dropdown">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div></td>
                     
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td><div class="dropdown">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div></td>
           
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
            <div class="tab-pane fade" id="nav-logos" role="tabpanel" aria-labelledby="nav-logos-tab">
              <div class="row row3" >
                <div class="col-10">
                  <h5>Custom Logo</h5>
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
                <div class="col-10">
                  <h5>Select Practice Areas</h5>
                </div>
                  <div class="col-1">
                    <button type="button" class="d-flex btn btn-primary text-white">Save</button>
                  </div>
                  <div class="col-1">
                    <button type="button" class="d-flex btn btn-primary text-white">Cancel</button>
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
                
      </div>
      </div>

    
    





</body>
</html>