<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

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
                <h3>Our Services</h3>
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
</body>
</html>