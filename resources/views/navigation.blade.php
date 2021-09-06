<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <script scr="script.js"></script>
        <title>Law Office - Homepage</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap');

            body {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            .navbar{
                display: flex;
                position: fixed;
                justify-content: space-between;
                align-items: center;
                flex-direction: row;
                flex-wrap: wrap;
                background-color: white;
                width: 100%;
                height: 100px;
                z-index: 1;
            }

            .logo{
                font-size: 50px;
                margin: 5px;
                color: rgb(181, 55, 91);
                font-family: "Raleway";
                font-weight: bolder;
                margin-left: 60px;
            }

            .navbar-links ul{
                margin: 0;
                padding: 0;
                display: flex;
            }

            .navbar-links li {
                list-style: none;
            }

            .navbar-links li a{
                text-decoration: none;
                font-size: 18px;
                color: rgb(115, 54, 87);
                padding: 15px;
                display: block;
                font-family: "Raleway";
                font-weight: bolder;
                letter-spacing: 2px;
                height: 5px;
                margin-right: 40px;
            }

        </style>

    </head>
    <body>
        
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div>
                <img class="img-fluid" src="images/Logo2.png" alt="logo2" width="70px"> 
                <img class="img-fluid" src="images/Logo1.png" alt="logo1" width="320px">  
            </div>
            <div class="navbar-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Law Update</a></li>
                    <li><a href="#">Law Practice</a></li>
                    <li><a href="#">Everday Law</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </div>
        </nav>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>