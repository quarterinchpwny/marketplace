<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>Law Office - Homepage</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap');

            *{
                padding: 0;
                margin: 0;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;
            }

            nav{
                background: #FFFF;
                height: 100px;
                width: 100%;
                z-index: 24;
            }
            label.logo{
                color: white;
                font-size: 35px;
                line-height: 80px;
                padding: 0 40px;
                font-weight: bold;
            }

            nav ul{
                float: right;
                margin-right: 20px;
            }
            nav ul li{
                display: inline-block;
                line-height: 80px;
                margin: 0 5px;
                padding-top: 20px;
            }
            nav ul li a{
                color: #641F43;
                font-family: "Raleway";
                font-weight: bolder;
                letter-spacing: 2px;
                padding: 7px 13px;
                border-radius: 3px;
                text-decoration: none;

            }
            a.active,a:hover{
                background:  #FFE2EA;
                transition: .5s;
                color:#B5375B;
            }

            nav ul li a:hover{
                color: #B5375B;
            }
            .checkbtn{
                font-size: 40px;
                color: #641F43;
                float: right;
                line-height: 100px;
                margin-right: 40px;
                margin-top: 25px;
                cursor: pointer;
                display: none;
            }
            #check{
                display: none;
            }
            @media (max-width: 952px){
                label.logo{
                    font-size: 30px;
                    padding-left: 50px;
                }
                nav ul li a{
                    font-size: 16px;
                    color: #641F43;
                }
            }
            @media (max-width: 858px){
                .checkbtn{
                    display: block;
                }
                ul{
                    position: fixed;
                    width: 100%;
                    height: 100vh;
                    background: #FFE2EA;
                    top: 100px;
                    left: -100%;
                    text-align: center;
                    transition: all .5s;
                }
                nav ul li{
                    display: block;
                    margin: 50px 0;
                    line-height: 30px;
                }
                nav ul li a{
                    font-size: 20px;
                }
                a:hover,a.active{
                    color: #B5375B;
                    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
                }
                #check:checked ~ ul{
                    left: 0;
                }
            }
        </style>

    </head>
    <body>

        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">
                <img class="img-fluid" src="images/Logo2.png" alt="logo2" width="50px"> 
                <img class="img-fluid" src="images/Logo1.png" alt="logo1" width="230px">  
            </label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Law Update</a></li>
                <li><a href="#">Law Practice</a></li>
                <li><a href="#">Everday Law</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>