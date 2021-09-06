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
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@500;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@700&display=swap');

            .banner-area{
                background-image: url(images/banner-header-image.jpeg);
                background-size: cover;
                background-position: center center;
                height: 900px;
                width: 100%;
                border-style: solid;
                border-width: 5px;
                border-color: rgb(208, 129, 152);
                border-left: 0;
                border-right: 0;
            }

            .header-area{
                background-color: rgb(255, 226, 234);
                opacity: 0.8;
                width: 1031px;
                height: 269px;
                padding: 20px;
                padding-top: 35px;
            }

            .header-area h1{
                font-family: 'Libre Baskerville';
                font-size: 64px;
                text-shadow: 2px 2px 5px grey;
                color: rgb(100, 31, 67);
                padding-bottom: 10px;
            }

            .header-area p{
                font-family: 'Raleway';
                font-size: 25px;
            }

            #login_panel{
                background-color: #FAF8F5;
                height: 759px;

            }
            #login_title{
                color: rgb(100, 31, 67);
                font-size: 48px;
                font-family: 'Raleway';
                font-weight: bold;
                text-align: center;
            }
            #login_field{
                width: 200px;
                background: #FFFFFF;
                border: solid 1px #641F43;
                box-sizing: border-box;
                border-radius: 10px;
                font-size: 15px;
                font-weight:400;
                color: #641F43;
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
            .input-group{
                width: 500px;
                height: 50px;
                margin: 0 auto;
                padding-top: 10px;
            }
            #login_remember{
                color: #641F43;
                font-size: 17px;
                padding-left: 130px;
                padding-bottom: 30px;
                font-weight: 400;
            }
            .form-check-input{
            background-color: #FAF8F5;
            border: solid 1px #7C9CAB;
            }
            .form-check-input:checked{
            border: solid 1px #B5375B;
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
                background-color: rgb(255, 226, 234);
                opacity: 0.8;
            }

            .break-line p{
                color: rgb(100, 31, 67);
                font-weight: bolder;
                text-shadow: 2px 2px 5px violet;
            }

        </style>

    </head>

    <body>

        <!-- Banner / Header -->
        <div class="banner-area">
            <section class="">
                    <div class="container">
                        <div class="header-area">
                            <h1>Lorem, ipsum dolor sit amet </h1>
                            <p>Aliquam nibh massa, fringilla a malesuada ut, sagittis ut sem. Quisque metus mauris, tristique nec lectus a, vehicula cursus elit.</p>
                        </div>

                        <div id="login_form" class="col-lg-5 padding-1" style="height: 720px; width: 680px;" >
                            
                            <div class="">

                                <div class="co-md-5 text-center" >
                                
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

                                    <div class="input-group mb-3">
                                        <input id="login_field" type="text" class="form-control d-bl" placeholder="Email" aria-label="Email"> <br>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input id="login_field" type="text" class="form-control" placeholder="Password" aria-label="Password">
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
                                        <p id="login_notice" >Don't have an account yet? <a id="login_sign_up" href="#" class="text-decoration-none">Sign up</a></p>
                                    </div>
                                    
                                </div>

                                <div id="powered">
                                    Powered by <img src="images/power1.png" alt="" width="100px" >
                                </div>

                            </div>
                            
                        </div>
                    </div>
               
            </section>
            
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>

  <!-- Testing -->