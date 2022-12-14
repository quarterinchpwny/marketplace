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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/feminine.css') }}" rel="stylesheet">  

    </head>

    <body>
        <div class="header-container">
            <header class="header-main-con sticky-top">
                <nav class="navbar navbar-expand-lg p-3">
                    <div class="container-fluid">

                        <!-- Brand -->
                        <div class="header-brand w-25 p-0 m-0">
                            <a class="navbar-brand d-flex align-items-center" href="#">
                                <img class="header-logo w-100 d-none d-lg-block" src="{{ URL::to('/') }}/Feminine-images/feminine/Rizal_Law_Office_Logo Pink.png" alt="Rizal Law Office Brand">
                                <span class="header-name d-lg-none">Rizal Law Office</span>
                            </a>
                        </div>

                        <!-- Navigation -->
                        <button class="header-menu navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto text-start text-decoration-none">
                                <a class="header-lst nav-link pe-3 active" aria-current="page" href="#">Home</a>
                                <a class="header-lst nav-link pe-3" href="#">Our Services</a>
                                <a class="header-lst nav-link pe-3" href="#">Law Practices</a>
                                <a class="header-lst nav-link pe-3" href="#">Law Update</a>
                                <a class="header-lst nav-link pe-3" href="#">Everyday Law</a>
                                <a class="header-lst nav-link pe-3" href="#">Blog</a>
                                <a class="header-lst nav-link" href="#">Profile</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>