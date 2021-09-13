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
                background-color: #F1DBE8;
            }

            .header-line {
                border: 1.5px solid #733657;
                width: 100px;
            }

            .practice-header {
                color: #733657;
                font-family: 'Libre Baskerville', serif;
                font-weight: 700;
            }

            .practice-card {
                background-color: transparent !important;
                border: 2px solid transparent !important;
            }

            .icons-con {
                background-color: #B8537B;
                box-shadow: 0px 2px 4px 10px rgba(219, 203, 214, 0.74);
                max-width: 150px;
                max-height: 150px;

                text-decoration: none;
            }

            .label-con {
                text-decoration: none;

                font-family: 'Raleway', serif;
                font-weight: 700;
                color: #733657;
            }

            .practice-card:hover {
                -webkit-box-sh
            }

            .btn-practice {
                background-color: #B5375B;
                border: 1px solid #B5375B;
                border-radius: 10px;

                font-family: 'Raleway', serif;
                color: white;
                font-weight: 700;

                margin-top: auto;
            }
        </style>
    </head>

    <body>
        <!-- Practice Areas -->
        <div class="practice-main-con position-relative container-fluid py-5">
            <hr class="header-line border-1 mx-auto">
            <div class="practice-header card-title text-center h2 mt-4 pb-3">PRACTICE AREAS</div>

            <div class="row justify-content-center px-5 py-4">
                <!-- First Half -->
                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img  src="{{ URL::to('/') }}/images/serv1.png" class="card-img-top" alt="Personal & Family Law">
                    </a>

                    <div class=""></div>

                    <div class="card-body align-content-center text-center pt-4 pb-5">
                        <a href="#" class="label-con card-text text-center h5">Personal & Family Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv2.png" class="card-img-top" alt="Labor Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-5">
                        <a href="#" class="label-con card-text text-center h5">Labor Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv3.png" class="card-img-top" alt="Civil Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-5">
                        <a href="#" class="label-con card-text text-center h5">Civil Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv4.png" class="card-img-top" alt="Immigration Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-5">
                        <a href="#" class="label-con card-text text-center h5">Immigration Law</a>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv5.png" class="card-img-top" alt="Criminal Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-4">
                        <a href="#" class="label-con card-text text-center h5">Criminal Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv6.png" class="card-img-top" alt="Commercial Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-4">
                        <a href="#" class="label-con card-text text-center h5">Commercial Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv7.png" class="card-img-top" alt="Taxation Law">
                    </a>

                    <div class="card-body align-content-center text-center pt-4 pb-4">
                        <a href="#" class="label-con card-text text-center h5">Taxation Law</a>
                    </div>
                </div>

                <div class="practice-card card align-items-center col-lg-3 col-md-6">
                    <a href="#" class="icons-con rounded-circle p-4">
                        <img src="{{ URL::to('/') }}/images/serv8.png" class="card-img-top" alt="Special Services">
                    </a>

<<<<<<< HEAD
                    <div class="card-body align-content-center text-center pt-4 pb-4">
=======
                    <div class="card-body align-content-center text-center pb-3">
>>>>>>> d952c9c318b0bae999fc3a9b297cd6ae7a0f6052
                        <a href="#" class="label-con card-text text-center h5">Special Services</a>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-center align-items-end pb-4">
                <button class="btn-practice py-1 px-4 rounded-3" type="button">SEE MORE</button>
            </div>
        </div>
    </body>
</html>
