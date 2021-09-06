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

    <section id="ourservices">
        <div class="flex justify-center bs-dirtywhite-bg">
            <div class="container">
                <h3 class="os-title">Our Services</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ASSIST</h5>
                                <img class="rounded mx-auto d-block img-logo " src="{{ URL::asset('NeutralHome_Graphics/02_Product_Assist_ver_3.png')}}" alt="Assist" height="110">
                                <p class="p1">FREE Legal Assessment</p>
                                <a href="#" class="btn btn-primary">Ask Lawyers</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="card">
                            <div class="card-body">
                               <h5 class="card-title">CONSULT</h5>
                               <img class="rounded mx-auto d-block img-logo" src="{{ URL::asset('NeutralHome_Graphics/01_Product_Consult_ver_3.png')}}" alt="Consult" height="110">
                               <p class="p1">PAID Legal Consultation</p>
                               <a href="#" class="btn btn-primary">Submit Legal Problem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">WORKS</h5>
                                <img class="rounded mx-auto d-block img-logo" src="{{ URL::asset('NeutralHome_Graphics/03_Product_Works_ver_3.png')}}" alt="Works" height="110">
                                <p class="p2">FREE Legal Fee Crowdsourcing and PAID Legal Works Escrow Delivery</p>
                                <a href="#" class="btn btn-primary">Request Proposal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
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

    <section id="everyday-law">
            <div class="container-fluid">
                <div class="row">
                    <h2>Everyday Law </h2>
                    <hr style="width: 188px;">
                </div>
                <div class="row" style="padding-left: 10px;">

                    <div class="col-2 justify-content-center" style="padding-right: 0px;">
                        <img src="{{ URL::to('/') }}/NeutralHome_Graphics/law_video.png" alt="">
                    </div>

                    <div class="col-1">
                    </div>

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
                </div>
            </div>
        </section>
</body>
</html>