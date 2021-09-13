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
        <style>
            html {
                height: 100%;
            }

            body {
                min-height: 100%;
                display: flex;
                flex-direction: column;
            }

            /*
            Color Palette
            - FFFFFF (white)
            - F1DBE8 (very light purple)
            - B8537B (light purple)
            - D08198 (light pink)
            - B5375B (pink)
            - 733657 (dark purple)
            */

            .practice-main-con{
                background-image: url("https://media.istockphoto.com/photos/judge-gavel-with-justice-lawyers-business-woman-in-suit-or-lawyer-on-picture-id1130829509?k=20&m=1130829509&s=612x612&w=0&h=9VMWql4leRnpb53RSt9fW7-V999aUp9PnvVReSj1RBg=");
                background-blend-mode:overlay ;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                background-color: #d08197b7;
            }

            .header-line {
                border: 1.5px solid #FFFFFF;
                width: 100px;
            }

            .header-holder {
                background-color: #b5375b;
                min-height: 50px;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            }

            .practice-header {
                color: #ffffff;
                font-family: 'Libre Baskerville', serif;
                font-weight: 700 !important;
            }

            .practice-card {
                background-color: #ffedf2ee !important;
                border-radius: 10px solid transparent !important;
                box-shadow: 0 5px 15px rgba(0,0,0,.1);
            }

            .icons-con {
                max-width: 200px;
                max-height: 180px;

                text-decoration: none;
            }

            .label-holder {
                background-color: transparent;
                height: 120px;
            }

            .label-con {
                text-decoration: none;

                font-family: 'Raleway', serif;
                font-weight: 700 !important;
                color: #733657;
            }

            .btn-practice {
                background-color: #B5375B;
                border: 1px solid #B5375B;
                border-radius: 10px;

                font-family: 'Raleway', serif;
                color: white;
                font-weight: 700;


                max-height: 120px;
                width: 270px;
            }
        </style>
    </head>

    <body>

        <div class="header-holder align-content-center pd-1">
            <hr class="header-line border-1 mx-auto">
            <div class="practice-header card-title text-center h2 mt-3 pb-3"> Our Services </div>
        </div>

        <!-- Practice Areas -->
        <div class="practice-main-con position-relative container-fluid py-5">       


                <section class="p-5">
                    <div class = "container">
                        <div class = "row justify-content-center mb-3">

                            <!-- Assist -->
                            <div class = "col-md mb-4">
                                <div class="practice-card card align-items-center col-lg-25 col-md-19">
                                   <div class = "icons-con mb-5 mt-5">
                                        <img src="assist.png" class="card-img-top" alt="Assist">
                                   </div>

                                   <div class = "label-holder mt-3 mb-4">
                                        <p class = "label-con text-center h4">
                                            FREE Legal <br> Assessment <br>
                                        </p>
                                    </div>
                                    <div class="card-body align-content-center text-center pb-4 pt-6">
                                        <button class="btn-practice py-3 px-1 rounded-3 card-text text-center text-decoration-none h2" a href="#" type = "button">
                                            Ask <br> Lawyers
                                        </button>
                                    </div>  
                               </div> 
                            </div>
                            <!-- Consult -->
                            <div class = "col-md mb-4">
                                <div class="practice-card card align-items-center col-lg-25 col-md-19">
                                   <div class = "icons-con mb-5 mt-5">
                                        <img src="consult.png" class="card-img-top" alt="Consult">
                                   </div>

                                   <div class = "label-holder mt-3 mb-4">
                                    <p class = "label-con text-center h4">
                                        Paid Legal <br> Consultation 
                                   </p>
                                   </div>
                                  
                                   <div class="card-body align-content-center text-center pb-4 pt-6">
                                        <button class="btn-practice py-3 px-1 rounded-3 card-text text-center text-decoration-none h2" a href="#" type = "button">
                                            Submit Legal <br> Problems
                                        </button>
                                     </div>  
                               </div> 
                            </div>
                            <!-- Works -->
                            <div class = "col-md mb-4">
                                <div class="practice-card card align-items-center col-lg-25 col-md-19">
                                   <div class = "icons-con mb-5 mt-5">
                                        <img src="Works.png" class="card-img-top" alt="Works">
                                   </div>

                                   <div class = "label-holder mt-3 mb-4">
                                    <p class = "label-con text-center h4">
                                        FREE Legal Fee <br> Crowdsourcing and <br> Paid Legal Works <br> Escrow Delivery
                                   </p>
                                </div>
                                <div class="card-body align-content-center text-center pb-4 pt-6">
                                    <button class="btn-practice py-3 px-1 rounded-3 card-text text-center text-decoration-none h2" a href="#" type = "button">
                                        Request <br> Proposal
                                    </button>
                                 </div>  
                               </div> 
                            </div>
                            <!-- Docs -->
                            <div class = "col-md mb-4">
                                <div class="practice-card card align-items-center col-lg-25 col-md-19">
                                   <div class = "icons-con mb-5 mt-5">
                                        <img src="docs.png" class="card-img-top" alt="Docs">
                                   </div>
                                   <div class = "label-holder mt-3 mb-4">
                                    <p class = "label-con text-center h4">
                                        Create Your Own Legal <br> Documents From <br> Hundreds of <br> Template
                                   </p>
                                </div>
                                <div class="card-body align-content-center text-center pb-4 pt-6">
                                    <button class="btn-practice py-3 px-1 rounded-3 card-text text-center text-decoration-none h2" a href="#" type = "button">
                                        Create Legal <br> Documents
                                    </button>
                                 </div>
                               </div> 
                            </div>
                        </div>
                    </div>
                </section>
        </div>

        <div class="header-holder align-content-center pd-1">
        </div>
    </body>
</html>
