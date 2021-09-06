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
    <nav class="navbar navbar-expand-md sticky-top navbar-custom navbar-dark p-9">
        <div class="container-fluid">
            <a href="#login" class="navbar-brand">
                <img class="nav-logo" src="{{ URL::asset('NeutralHome_Graphics/Rizal_Law_Office_Logo.png')}}" alt="logo" height="45">
            </a>
            <!-- toggle for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="#main-nav" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation links -->
            <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                <ul class="nav justify-content-start nav-font">
                    <li class="nav-item">
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
                    <a class="nav-link" href="#EverydayLaw">Everyday Law</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#Blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- log-in section -->
    <section id="login" >
            <div class="container-fluid ">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-md-5 col-lg-9 d-none d-md-block padding-0">
                        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ URL::to('/') }}/NeutralHome_Graphics/banner.png" class="d-block w-100" alt="banner picture" width="1289px" height="825px">
                                <div class="carousel-caption d-none d-md-block">
                                    <div id="headline">Lorem, ipsum dolor sit amet </div>
                                    <div id="subheadline">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui modi soluta dolorem tempore fugiat molestiae!</div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div id ="login_panel" class="col-lg-3 padding-0" style="height: 825px;" >
                        <div class="p-5 text-dark">
                            <div class="co-md-5 text-center" >
                                <div>
                                    <img class="img-fluid" src="{{ URL::to('/') }}/NeutralHome_Graphics/RLOLogo.png" alt="logo" width="76px"> 
                                </div>
                            
                                <div id="login_title"><p class = "p-welcome">Welcome to Rizal Law Office</p></div>
                              
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

                                <div id="hr">
                                <p><hr class="hr-login"></p>
                                </div>
                                
                                <div>
                                    <p id="login_notice" >Don't have an account yet?</p>
                                    <a id="login_create" href="#" class="text-decoration-none">Create an Account</a>
                                </div>
                                
                            </div>
                            <div id="powered">
                                Powered by <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_logo.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section id="ourservices">
        <div class="flex justify-center bs-dirtywhite-bg">
            <div class="container-fluid">
                <h2 class="os-title">Our Services</h2>
                <hr style="width: 188px; margin-bottom: 35px;">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ASSIST</h5>
                                <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/02_Product_Assist_ver_3.png')}}" alt="Assist" height="110">
                                <p class="p1">FREE Legal Assessment</p>
                                <a href="#" class="btn btn-primary">Ask Lawyers</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card">
                            <div class="card-body">
                               <h5 class="card-title">CONSULT</h5>
                               <img class="rounded mx-auto d-block img-logo" src="{{ URL::asset('NeutralHome_Graphics/01_Product_Consult_ver_3.png')}}" alt="Consult" height="110">
                               <p class="p1">PAID Legal Consultation</p>
                               <a href="#" class="btn btn-primary">Submit Legal Problem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">WORKS</h5>
                                <img class="rounded mx-auto d-block img-logo" src="{{ URL::asset('NeutralHome_Graphics/03_Product_Works_ver_3.png')}}" alt="Works" height="110">
                                <p class="p2">FREE Legal Fee Crowdsourcing and PAID Legal Works Escrow Delivery</p>
                                <a href="#" class="btn btn-primary">Request Proposal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col"> 
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">DOCS</h5>
                                <img class="rounded mx-auto d-block img-logo" src="{{ URL::asset('NeutralHome_Graphics/04_Product_Docs_ver_3.png')}}" alt="Docs" height="110">
                                <p class="p2">CREATE your own LEGAL DOCUMENTS from hundreds of templates</p>
                                <a href="#" class="btn btn-primary">Create Legal Document</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="law-practice">
        <div class="container-fluid">
            <div class="row">
            <h2>Law Practice Areas</h2>
            <hr style="width: 188px; margin-left: 15px;">
            </div>
        
            <div class="row" id="areas_pics">
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/perosnal.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/civil.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/commercial.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/labor.png" alt=""></div>
            </div>
            </div>
        
        <div class="row" id="areas_labels">
            <div class="col-3">
                <p>Personal and Family Law</p>
            </div>
            <div class="col-3">
                <p>Civil Law</p>
            </div>
            <div class="col-3">
                <p>Commercial Law</p>
            </div>
            <div class="col-3">
                <p>Labor Law</p>
            </div>
            </div>

        <div class="row" id="areas_pics">
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/immigration.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/criminal.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/taxation.png" alt=""></div>
            </div>
            <div class="col-3">
                <div class="zoom"><img src="{{ URL::to('/') }}/NeutralHome_Graphics/special_services.png" alt=""></div>
            </div>
        </div>
        <div class="row" id="areas_labels">
            <div class="col-3">
                <p>Immigration Law</p>
            </div>
            <div class="col-3">
                <p>Criminal Law</p>
            </div>
            <div class="col-3">
                <p>Taxation Law</p>
            </div>
            <div class="col-3">
                <p>Special Services Law</p>
            </div>
            </div>
        </div>
        <div class="row justify-content-center" id="areas_buttons">
            <a class="btn" href="#" role="button" id="areas_seemore">SEE MORE</a>
        </div>
    </section>

    <section id="law-updates">
            <div class="container-fluid">
                <div class="row">
                    <h2>Law Updates</h2>
                    <hr style="width: 188px; margin-left: 15px;">
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
                <h2>Everyday Law </h2>
                <hr style="width: 188px; margin-left: 15px;">
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
             <!-- footer -->
             <section id="footer">
        <div class="container-fluid .padding-0">
            <div class="row" id="footer_top" >
                <div class="col-6" id="footer_logo">
                    <div>
                        <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Rizal_Law_Office_Logo.png" alt="footer logo" height="90px" style="margin-top: 90px;">
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