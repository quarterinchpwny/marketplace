<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Raleway Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('css/layout.css'); }}" rel="stylesheet">
    <title>LexHome</title>
</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-custom navbar-light ">
        <div class="container-fluid">
            <a href="#login" class="navbar-brand">
                <img class="nav-logo display-2 d-none d-lg-block justify-content-start" src="{{ URL::asset('NeutralHome_Graphics/Rizal_Law_Office_Logo.png')}}" alt="logo" height="59">
            </a>
            <!-- toggle for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="#main-nav" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation links -->
            <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                    <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#law-updates">Law Updates</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#law-practice">Law Practice</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#everyday-law">Everyday Law</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- log-in section -->
    <section id="login" >
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-sm-6 padding-0">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="{{ URL::to('/') }}/NeutralHome_Graphics/banner.png" class="d-block w-100" alt="banner picture" max-width="1289px" max-height="825px">
                                    <div class="carousel-caption">
                                        <h1 class="display-3 text-start">Rizal Law Office</p>
                                        <h1 class="display-5 text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id ="login_panel" class="col-sm-6 padding-0" >
                        <div class="p-5 text-dark">
                            <div class="col-sm-6 text-center" >
                                <div>
                                    <img class="img-fluid" src="{{ URL::to('/') }}/NeutralHome_Graphics/RLOLogo.png" alt="logo" max-height="20px"> 
                                </div>
                            
                                <div class="d-none d-sm-block">
                                    <h1 class="display-6" >Welcome to Rizal Law Office</h1>
                                </div>

                                <div class="d-block d-sm-none">
                                    <p class="h4">Welcome to Rizal Law Office</p>
                                </div>
                              
                                <div class="input-group mb-3">
                                    <input id="login_field" type="text" class="form-control d-bl" placeholder="Email" aria-label="Email"> <br>
                                </div>
                                <div class="input-group mb-3">
                                    <input id="login_field" type="text" class="form-control" placeholder="Password" aria-label="Password">
                                </div>
                                <div id="login_remember" class="form-check justify-content-start text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember Me
                                    </label>
                                </div>

                                <div>
                                    <a id="login_button" href="#services" class="btn btn-primary btn-md" >LOG IN</a>
                                </div>
                                
                                <div>
                                    <a id="login_forgot" href="#" class="text-decoration-none">Forgot Password</a>
                                </div>
                               
                                <div>
                                    <a id="login_social" href="#services" class="btn btn-primary btn-md" style="padding-left: 30px;"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="" style="padding-left: 15px; padding-right: 5px;" width="47px">LOGIN WITH FACEBOOK</a>
                                    <a id="login_social" href="#services" class="btn btn-primary btn-md" style="padding-left: 30px;"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/google_icon.png" alt="" style="padding-left: 15px; padding-right: 5px;" width="47px">LOGIN WITH GOOGLE</a>
                                </div>

                                <br>
                                <!-- <div id="hr">
                                <p><hr class="hr-login"></p>
                                </div> -->
                                
                                <div>
                                    <p id="login_notice" >Don't have an account yet?</p>
                                    <a id="login_create" href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signup">Create an Account</a>
                                </div>
                                
                            </div>
                            <div id="powered">
                                Powered by <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_logo.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--sign-up modal -->
        <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Register to Rizal Law Office</h4>
                        <button type=button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action=" {{ route('add.user.post') }}">
                        @csrf    
                        <label for="modal-username" class="form-label"> Username:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="Username">
                        
                        <label for="modal-password" class="form-label"> Password:</label>
                        <input type="password" class="form-control" id="modal-email" placeholder="Password">
                        
                        <label for="modal-firstname" class="form-label"> First Name:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="First Name">
                        
                        <label for="modal-lastname" class="form-label"> Last Name:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="Last Name">
                        
                        <label for="modal-email" class="form-label"> Email Address:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="e.g. stabol@gmail.com">
                        
                        <label for="modal-contact" class="form-label"> Contact Number:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="e.g. 09123456789">
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" >Create an Account</button>
                    </div>
                </div>
            </div>
        </div>
        </section>


    <section id="ourservices">
        <div class="flex justify-center bs-dirtywhite-bg">
            <div class="container-fluid">

                <h1 class="display-2 d-none d-lg-block">Our Services</h1>
                <hr class="d-none d-lg-block" style="width: 188px; margin-bottom: 30px;">
                <h1 class="display-1 d-block d-lg-none">Our Services</h1>

                <div class="container-xxl">
                    <div class="row align-items-center justify-content-center ">
                        <div class="col-8 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title display-6 py-3">ASSIST</h5>
                                    <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/02_Product_Assist_ver_3.png')}}" alt="Assist" height="100">
                                    <br><p>FREE Legal Assessment</p><br>
                                    <a href="#" class="btn btn-primary btn-lg">Ask Lawyers</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title display-6 py-3">CONSULT</h5>
                                    <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/01_Product_Consult_ver_3.png')}}" alt="Assist" height="100">
                                    <br><p>PAID Legal Consultation</p><br>
                                    <a href="#" class="btn btn-primary btn-lg">Submit Legal Problem</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title display-6 py-3">WORKS</h5>
                                    <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/02_Product_Assist_ver_3.png')}}" alt="Assist" height="100">
                                    <p>FREE Legal Fee Crowdsourcing and PAID Legal Works Escrow Delivery</p><br>
                                    <a href="#" class="btn btn-primary btn-lg">Request Proposal</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-lg-6 col-xl-3">
                            <div class="card ">
                                <div class="card-body text-center">
                                    <h1 class="card-title display-6 py-3">DOCS</h1>
                                    <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/04_Product_Docs_ver_3.png')}}" alt="Assist" height="100">
                                    <p>CREATE your own LEGAL DOCUMENTS from hundreds of templates</p>
                                    <a href="#" class="btn btn-primary btn-lg">Create Legal Document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- law practice -->
    <section id="law-practice">
        <div class="container-fluid">

            <h1 class="display-2 d-none d-sm-block">Law Practice Areas</h1>
            <h1 class="display-1 d-block d-sm-none">Law Practice Areas</h1>
            <hr class="d-none d-sm-block" style="width: 188px; margin-bottom: 30px;">

        <div class="container-xxl">
            <div class="row align-items-center justify-content-center">
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/personal.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/civil.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/commercial.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/labor.png" alt=""></div>
                </div>
            </div>
        
            <div class="row" id="areas_labels">
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Personal and<br>Family Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Civil Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Commercial Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Labor Law</h1>
                </div>
            </div>

            <div class="row align-items-center justify-content-center ">
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/immigration.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/criminal.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/taxation.png" alt=""></div>
                </div>
                <div class="col-8 col-lg-6 col-xl-3">
                    <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/special_services.png" alt=""></div>
                </div>
            </div>

            <div class="row " id="areas_labels">
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Immigration Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Criminal Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Taxation Law</h1>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <p class="h4">Special Services Law</h1>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center py-5" id="areas_buttons">
            <a class="btn" href="#law-practice" role="button" id="areas_seemore">SEE MORE</a>
        </div>
    </section>

    <section id="law-updates">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="display-2 d-none d-sm-block">Law Updates</h1>
                    <h1 class="display-1 d-block d-sm-none">Law Updates</h1>
                    <hr class="d-none d-sm-block" style="width: 188px; margin-bottom: 30px;">
                </div>
                <div class="row" style="padding-left: 10px;">
                    <div class="col-7" >
                        <div id="updates-heading">
                            <p>Can your text message or e-mail message be used as evidence in court?</p>
                        </div>
                        <div id="updates-content">
                            <p>Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as contracts, agreements, letters and other writings.</p>
                            <p>These writings printed in papers or paper-based documents are popularly known then as our documentary evidence.</p>
                            <p>At that time, text message or e-mail message, as it was not yet widely used and known in the Philippines, are not considered as documentary evidence by our courts of law. </p>
                        </div>
                        <div style="padding-top:30px">
                            <a class="btn" href="#" role="button" id="areas_seemore" >SEE MORE</a>
                        </div>
                    </div>

                    <div class="col-1">
                    </div>

                    <div class="col-2 justify-content-center" style="padding-right: 0px;">
                        <img src="{{ URL::to('/') }}/NeutralHome_Graphics/law_updates_banner.png" alt="Law Updates">
                    </div>
                </div>
            </div>
        </section>

    <section id="everyday-law">
        <div class="container-fluid">
            <div class="row">
                <h1 class="display-2">Everyday Law </h1>
                <hr class="d-none d-lg-block" style="width: 188px; margin-bottom: 30px;">
            </div>
            <div class="row justify-content-center" style="padding: 30px 0 0 10px;">

                <div class="col-2 justify-content-end" style="padding-right: 0px;">
                    <img src="{{ URL::to('/') }}/NeutralHome_Graphics/law_video.png" alt="Everyday Law">
                </div>

                <div class="col-5">
                </div>

                <div class="col-5 " >
                    <div id="updates-heading">
                        <div>
                            <p id="title1">"Co-maker ng di nagbayad sa utang,</p>
                        </div>
                        
                        <p id="title2">Tama ba na <br>ikaw ang singilin?"</p>
                        
                    </div>
                    <div id="updates-content">
                        <p id="everyday_content">Nakapirma ka na ba sa loan agreement bilang co-maker?</p>
                        <p id="everyday_content">Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan?</p>
                    </div>
                    <div style="padding-top:30px">
                        <a class="btn" href="#" role="button" id="everyday_seemore">SEE MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

             <!-- footer -->
             <section id="footer">
        <div class="container-fluid .padding-0">
            <div class="row" id="footer_top" >
                    <div>
                        <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Rizal_Law_Office_Logo.png" alt="footer logo" height="90px" >
                    </div>
                    <div id="footer-subhead">
                        <p><i>Lorem ipsum dolor</i></p>
                    </div>
                </div>

                <div class="col-2" id="footer_terms">
                    <h4>Terms of Use</h4>
                    <h4>Privacy Policy</h4>
                    <h4>Informed Consent of<br>Service Performed</h4>
                    <h4>Disclaimer</h4>
                </div>

                <div class="col-2" id="footer_address">
                    <h3>Address</h3>
                    <p>LexMeet, Inc.
                    <br>Unit 608, 6th floor
                    <br>AIC Burgundy Empire Tower
                    <br>ADB Avenue corner Garnet Road
                    <br>Ortigas Center, Pasig City</p>
                </div>

                <div class="col-2" id="footer_contact">
                    <h3>Contact Us</h3>
                    <p>(02) 8-451-1594</p>
                    <p>contact@rizallawoffice.com</p>
                        <a href="#" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="#" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/twitter_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LinkedIN_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Instagram_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Twitter_icon.png" alt="" style="max-height: 33px;">
                        </a>
                </div>
            </div>
            <div class="row" id="footer_bottom">
                <div>
                    Powered by &nbsp; <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_white_logo.png" alt="" width="100px">
                </div>
            </div>    
        </div>
    </section> 
    
</body>
</html>