<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <script scr="script.js"></script>
        <title>Law Office - Homepage</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@500;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@700&display=swap');
                  
        .row{
             margin:0 !important;
        }
          /* Banner-Header CSS */
          .banner-image{
                position: relative;
                height: 900px;
                background: url(image/banner-header-image.jpeg) no-repeat center;
                background-size: cover;
                border-style: solid;
                border-width: 5px;
                border-color: #D08198;
                border-left: 0;
                border-right: 0;
            }

            #container{
                position: absolute;
            }

            /* Header-Area CSS */
            #header-area{
                margin-top: 500px;
                background-color: #FFE2EA;
                padding: 20px;
            }

            #header-area h1{
                font-family: 'Libre Baskerville';
                font-size: 50px;
                text-shadow: 2px 2px 5px grey;
                color: #733657;
            }

            #header-area p{
                font-family: 'Raleway';
                font-size: 24px;
                color: #641F43;
            }

            /* Log-in/Sign-up CSS */

            #login_title{
                color: #641F43;
                font-size: 48px;
                font-family: 'Raleway';
                font-weight: bold;
                text-align: center;
                padding-top: 30px;
            }
            #login_field{
                width: 500px;
                background: #FFFFFF;
                border: solid 1px #641F43;
                box-sizing: border-box;
                border-radius: 10px;
                font-size: 15px;
                font-weight:400;
                color: #641F43;
                padding: 10px;
            }
            #login_button{
                width: 300px;
                height: 50px;
                background: #B5375B;
                border-radius: 10px;
                border: solid 1px #B5375B;
                font-weight: 700;
                font-size: 24px;   
            }

            #login_button:hover{
                background: #733657;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);  
            }

            .input-group{
                width: 500px;
                height: 50px;
                margin: 0 auto;
                padding-top: 10px;
            }
            #login_remember{
                color: #641F43;
                font-size: 17px;
                padding-left: 50px;
                padding-bottom: 30px;
                font-weight: 400;
                padding-top: 10px;
            }
            .form-check-input{
            background-color: #FFFFFF;
            border: solid 1px #641F43;
            }
            .form-check-input:checked{
            border: solid 1px #641F43;
            background-color: #B5375B;
            }
            #login_forgot{
                font-size: 18px;
                font-weight: 500;
                color: #B5375B;
                padding-left: 200px;
            }
            #login_social{
                width: 245px;
                height: 50px;
                background: #FFFFFF;
                border-radius: 10px;
                border: solid 1px #641F43;
                font-weight: 700;
                padding-top: 10px;
                text-align: right;
                color: #641F43;
                font-size: 18px;

            }
            #login_notice{
                font-size: 20px;
                font-weight: 300;
                color: #641F43;
                padding: 5px;
                font-weight: 500;
            }
            #login_sign_up{
                margin-top:0;
                font-size: 20px;
                font-weight: 700;
                padding: 5px;
                color: #B5375B;
            }
            #powered{
                padding-top: 79px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                color: #B5375B;
                font-family: 'Raleway';
            }

            #login_form{
                background-color: #FFE2EA;
                opacity: 0.8;
                height: 710px; 
                width: 550px;
                padding: 10px;
                margin-top: 50px;
            }


        </style>

    </head>

    <body>

           <!-- Banner / Header -->
        <div class="banner-image">
            <div id="container" class="row">
                <div id="header-area" class="col-lg-7">
                    <h1>Lorem, ipsum dolor sit amet </h1>
                    <p>Aliquam nibh massa, fringilla a malesuada ut, sagittis ut sem. Quisque metus mauris, tristique nec lectus a, vehicula cursus elit.</p>
                </div>

                <div class="col-lg-1"></div>

                <div id="form-area" class="col-lg-4">

                    <!-- Login Form -->
                    <div id="login-container" class="animate form">
                        <div id="login_form" class="text-center">
                                
                            <div id="login_title"><p>Welcome to</p></div>

                            <div>
                                <img class="img-fluid" src="images/Logo2.png" alt="logo2" width="70px"> 
                                <img class="img-fluid" src="images/Logo1.png" alt="logo1" width="320px">  
                            </div>
                            <br>
                            <div>
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 5px;"> <img src="images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Login with Google</a>
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 5px;"> <img src="images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Login with Facebook</a>
                            </div>

                            <div class="break-line"> 
                                <p>___________________________________ or ____________________________________</p>
                            </div>

                            <div class="input-group">
                                <input id="login_field" type="text" class="" placeholder="Email" aria-label="Email"> <br>
                            </div>

                            <div class="input-group">
                                <input id="login_field" type="text" class="" placeholder="Password" aria-label="Password">
                            </div>

                                <div id="login_remember" class="form-check justify-content-start text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember Me
                                        <a id="login_forgot" href="#" class="text-decoration-none">Forgot Password</a>
                                    </label>
                                </div>

                                <div>
                                    <a id="login_button" href="#services" class="btn btn-primary btn-md" >Log in</a>
                                </div>
                                    
                                <div>
                                    <p id="login_notice" >Don't have an account yet? <a id="login_sign_up" href="#toregister" class="text-decoration-none">Sign up</a></p>
                                </div>   

                                <div id="powered">
                                    Powered by <img src="images/power1.png" alt="" width="100px" >
                                </div>
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>

  <!-- Di responsive si Login in Form :( --  ) -->