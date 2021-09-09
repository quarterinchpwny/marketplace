<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link href="{{ URL::asset('cms-css/cmsstyle.css'); }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    
    <div id="viewport">
 
    <!-- Sidebar --> 
    <div class="flex-column flex-shrink-0 p-3 sidebar-nav offcanvas offcanvas-start" style=" background-color: #F8FFFE;" >
      <div id="line" style="background-color: #F4512C;"></div>
      <ul class="nav  flex-column mb-auto">
        <li class="nav-item">
          <a href="{{url ('/cms') }}" class="nav-link active" >Homepage</a>
        </li> 
        <li class="nav-item">
          <a href="{{url ('/cmsServices') }}" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsRegistration') }}" class="nav-link">Registration Section</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsLawyersBlog') }}" class="nav-link">Lawyer's Blog Section</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsLawUpdate') }}" class="nav-link">Law Update Section</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsEverydayLaw') }}" class="nav-link">Everyday Law</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsLawyersProfile') }}" class="nav-link">Lawyer's Profile</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsLawFirmPractice') }}" class="nav-link">Law Firm Practice</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsContactUs') }}" class="nav-link">Contact Us Page</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsPrivacyPolicy') }}" class="nav-link">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/cmsDomainSettings') }}" class="nav-link">Domain Settings</a>
        </li>
      </ul>
      <div class="sidenav-logo">
        <img src="{{ URL::to('/') }}/cms-graphics/Powered.png" alt="Powered by LexMeet" width="200px"> 
      </div>
    </div>
     <!--Top Navigation--> 
     <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #F8FFFE;">
      <div class="container-fluid">
        <a class="align-items-center mb-3 mb-md-0 me-md-auto sidebar-logo" href="#"><img src="{{ URL::to('/') }}/cms-graphics/logo1.png" alt="Rizal Law Office" width="200px"></a>
       
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
            @yield('content')
        </div>
      </div>

      <script>
        $('.sidebar-nav ul li').click(function(){
          $(this).addClass("active").siblings().removeClass("active");
        });
      </script>
</body>
</html>