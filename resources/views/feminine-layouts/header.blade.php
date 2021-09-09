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

            header {
                background-color: lightblue

            }

            .header-logo {
                background-color: lightgreen;
                max-width: 30%;
            }

            ul {
                color: #733657;

                min-width: 25%;
            }

            .header-list {
                color: #733657;
                font-weight: 700;

            }
        </style>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-sm p-3">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a href="#" class="navbar-brand">
                        <img class="header-logo" src="/public/images/Rizal_Law_Office_Logo Pink.png" alt="Rizal Law Office Brand">
                    </a>

                    <!-- Navigation Bar -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="toggleMobileMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a href="#" class="header-list nav-link active">Home</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Our Services</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Law Practices</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Law Update</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Everyday Law</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Blog</a> </li>
                            <li class="nav-item"> <a href="#" class="header-list nav-link">Profile</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="sample-con container-fluid h3">
            hello world!
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
