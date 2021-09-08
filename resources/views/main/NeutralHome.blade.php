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
                    <li class="nav-item px-2">
                    <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#law-updates">Law Updates</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#law-practice">Law Practice</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#EverydayLaw">Everyday Law</a>
                    </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="#Blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('lexcontent.lexlogin')
    @include('lexcontent.lexourservices')
    @include('lexcontent.lexpractice')
    @include('lexcontent.lexlawupdates')
    @include('lexcontent.lexeverydaylaw')
    @include('lexcontent.lexfooter')
    @include('lexcontent.lexsignup')
</body>
</html>