<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Font Style -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Title -->
        <title>Header</title>

        <!-- CSS -->

    </head>

    <body>
    <div class="services-container">
        <div class="service-header-holder align-content-center pd-1">
                <hr class="service-header-line border-1 mx-auto">
                <div class="service-header card-title text-center h2 mt-3 pb-3"> OUR SERVICES </div>
            </div>

            <!-- Our Services -->
            <div class="service-main-con position-relative service-container-fluid py-5">       


                    <section class="p-3">
                        <div class = "service-container">
                            <div class = "row justify-content-center mb-3">

                                <!-- Assist -->
                                <div class = "col-xl-3 col-lg-6 col-md-6 col-xs-2 mb-4">
                                    <div class="service-card card align-items-center">
                                    <div class = "service-icons-con mb-5 mt-5">
                                        <img src="{{ URL::to('/') }}/images/assist.png" class="card-img-top" alt="Assist">
                                    </div>

                                    <div class = "service-label-holder mt-5 mb-4">
                                            <p class = "service-label-con text-center h4">
                                                FREE Legal <br> Assessment <br>
                                            </p>
                                        </div>
                                        <div class="card-body align-content-center text-center pb-4 pt-6">
                                            <button class="btn-service py-3 px-1 rounded-3 card-text text-center text-decoration-none h3" a href="#" type = "button">
                                                Ask <br> Lawyers
                                            </button>
                                        </div>  
                                </div> 
                                </div>
                                <!-- Consult -->
                                <div class = "col-xl-3 col-lg-6 col-md-6 col-xs-2 mb-4">
                                    <div class="service-card card align-items-center">
                                    <div class = "service-icons-con mb-5 mt-5">
                                        <img src="{{ URL::to('/') }}/images/consult.png" class="card-img-top" alt="Consult">
                                    </div>

                                    <div class = "service-label-holder mt-5 mb-4">
                                        <p class = "service-label-con text-center h4">
                                            Paid Legal <br> Consultation 
                                    </p>
                                    </div>
                                    
                                    <div class="card-body align-content-center text-center pb-4 pt-6">
                                            <button class="btn-service py-3 px-1 rounded-3 card-text text-center text-decoration-none h3" a href="#" type = "button">
                                                Submit Legal <br> Problems
                                            </button>
                                        </div>  
                                </div> 
                                </div>
                                <!-- Works -->
                                <div class = "col-xl-3 col-lg-6 col-md-6 col-xs-2 mb-4">
                                    <div class="service-card card align-items-center">
                                    <div class = "service-icons-con mb-5 mt-5">
                                        <img src="{{ URL::to('/') }}/images/Works.png" class="card-img-top" alt="Works">
                                    </div>

                                    <div class = "service-label-holder mt-5 mb-4">
                                        <p class = "service-label-con text-center h4">
                                            FREE Legal Fee <br> Crowdsourcing and <br> Paid Legal Works <br> Escrow Delivery
                                    </p>
                                    </div>
                                    <div class="card-body align-content-center text-center pb-4 pt-6">
                                        <button class="btn-service py-3 px-1 rounded-3 card-text text-center text-decoration-none h3" a href="#" type = "button">
                                            Request <br> Proposal
                                        </button>
                                    </div>  
                                </div> 
                                </div>
                                <!-- Docs -->
                                <div class = "col-xl-3 col-lg-6 col-md-6 col-xs-2 mb-4">
                                    <div class="service-card card align-items-center">
                                    <div class = "service-icons-con mb-5 mt-5">
                                        <img src="{{ URL::to('/') }}/images/docs.png" class="card-img-top" alt="Docs">
                                    </div>
                                    <div class = "service-label-holder mt-5 mb-4">
                                        <p class = "service-label-con text-center h4">
                                            Create Your Own Legal <br> Documents From <br> Hundreds of <br> Template
                                    </p>
                                    </div>
                                    <div class="card-body align-content-center text-center pb-4 pt-6">
                                        <button class="btn-service py-3 px-1 rounded-3 card-text text-center text-decoration-none h3" a href="#" type = "button">
                                            Create Legal <br> Documents
                                        </button>
                                    </div>
                                </div> 
                                </div>
                            </div>
                        </div>
                    </section>
            </div>

            <div class="service-header-holder align-content-center pd-1">
            </div>
    </div>
    </body>
</html>