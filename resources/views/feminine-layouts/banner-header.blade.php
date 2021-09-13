<html>
    <head>     
        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Law Office - Homepage</title>    

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@500;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Raleway:wght@700&display=swap');

            .col-1{
                margin: 0 !important;
                padding: 0 !important;
            }

            * {
                box-sizing: border-box;
            }

            .row::after {
                content: "";
                clear: both;
                display: block;
            }

            .row{
                margin: 0 !important;
                padding: 0 !important;
            }

            .banner-image{
                height: 750px;
                background: url(images/banner-header-image.jpeg) no-repeat center;
                background-size: cover;
                border-style: solid;
                border-width: 5px;
                border-color: #B5375B;
                border-left: 0;
                border-right: 0;
                border-top: 0;
            }

            [class*="col-"] {
                float: left;
                padding: 0px;
            }

            /* Header CSS */
            #header-area{
                margin-top: 430px;
                background-color: #FFE2EA;
                opacity: 0.8;
                height: 200px;
                padding: 20px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);

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
                padding-right: 15px;
            }

            #login_container{
            }

            .aside {
                background-color: #FFE2EA;
                opacity: 0.8;
                padding: 15px;
                color: #ffffff;
                text-align: center;
                font-size: 14px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                width: 550px;
                margin-top: 30px;
            }

            /* Log-in/Sign-up CSS */

            #login_title{
                color: #641F43;
                font-size: 48px;
                font-family: 'Raleway';
                font-weight: bold;
                padding-top: 30px;
            }
            #login_field{
                width: 463px;
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
                margin: 0 auto;
                padding-top: 5px;
                padding-left: 30px;
            }

            #login_remember{
                color: #641F43;
                font-size: 17px;
                padding-left: 60px;
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
                padding-left: 190px;
            }
            #login_social{
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
                padding-top: 60px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                color: #B5375B;
                font-family: 'Raleway';
                padding-bottom: 20px;
            }

            .break-line p{
                color: rgb(100, 31, 67);
                font-weight: bolder;
                text-shadow: 2px 2px 5px #B5375B;
            }

            /* Signup Form CSS  */

            #signup_panel{
                background-color: #FAF8F5;
                height: 759px;
            }

            #signup_title{
                color: rgb(100, 31, 67);
                font-size: 48px;
                font-family: 'Raleway';
                font-weight: bold;
                text-align: center;
                padding-top: 30px;
            }
            #signup_field{
                width: 200px;
                background: #FFFFFF;
                border: solid 1px #641F43;
                box-sizing: border-box;
                border-radius: 10px;
                font-size: 15px;
                font-weight:400;
                color: #641F43;
            }

            #signup_button{
                width: 300px;
                height: 50px;
                background: #B5375B;
                border-radius: 10px;
                border: solid 1px #B5375B;
                font-weight: 700;
                font-size: 24px;    
            }

            #signup_button:hover{
                color: #641F43;
                background: white;
            }


            #signup_remember{
                color: #641F43;
                font-size: 17px;
                padding-left: 130px;
                padding-bottom: 30px;
                font-weight: 400;
            }

            #signup_social{
                
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

            #signup_notice{
                font-size: 20px;
                font-weight: 300;
                color: #641F43;
                padding: 5px;
                font-weight: 500;
            }

            #signup_login_up{
                margin-top:0;
                font-size: 20px;
                font-weight: 700;
                padding: 5px;
                color: #B5375B;
            }

            #signup_form{
                background-color: #FFE2EA;
                opacity: 0.9;
                height: 800px; 
                width: 600px;
                padding: 20px;
            }


            /* For desktop: */
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}

            @media only screen and (max-width: 768px) {
                /* For mobile phones: */
                [class*="col-"] {
                    width: 100%;
                }

                .banner-image{
                    width: 100%;
                    height: 243px;
                    object-fit: fill;
                }

                #header-area{
                    margin-top: 145px;
                    height: 100%;
                    width: 100%;
                    padding: 5px 0px 0px 20px;
                }

                #header-area h1{
                    font-size: 20px;
                 }

                #header-area p{
                    font-size: 10px;
                }

                #login_form{
                    width: 100%;
                    margin-top: 0px;
                }

                #login_title{
                    font-size: 22px;
                    padding-top: 10px;
                }

                #login_field{
                    font-size: 12px;
                    padding: 10px;
                    width: 100%;
                }

                .input-group{
                    padding: 5px 10px;
                }

                #login_remember{
                    font-size: 12px;
                    padding-left: 35px;
                }

                #login_forgot{
                    font-size: 12px;
                    padding-left: 120px;
                }

                #login_social{
                    height: 50px;
                    text-align: center;
                    font-size: 12px;
                    width: 90%;
                }

                .break-line p{
                    padding: 5px;
                    font-size: 10px;
                }

                #login_notice{
                    font-size: 14px;
                }

                #login_sign_up{
                    font-size: 14px;
                }

                #powered{
                    padding-top: 50px;
                    font-size: 10px;
                }

                #login_button{
                    width: 200px;
                    height: 40px;
                    font-size: 16px;
                }

            }

            @media only screen and (min-width: 768px) and (max-width: 1024px){
                /* For tablets: */
                [class*="col-"] {
                    width: 100%;
                }

                .banner-image{
                    width: 100%;
                    height: 350px;
                    object-fit: fill;
                }

                #header-area{
                    margin-top: 200px;
                    height: 100%;
                    width: 100%;
                    padding: 10px 0px 0px 20px;
                }

                #header-area h1{
                    font-size: 32px;
                 }

                #header-area p{
                    font-size: 18px;
                }

                #login_form{
                    width: 100%;
                    margin-top: 0px;
                }

                #login_title{
                    font-size: 32px;
                    padding-top: 10px;
                }

                #login_field{
                    font-size: 15px;
                    padding: 10px;
                    width: 100%;
                }

                .input-group{
                    padding: 5px 10px;
                    width: 78%;
                }

                #login_remember{
                    font-size: 16px;
                    padding-left: 135px;
                }

                #login_forgot{
                    font-size: 16px;
                    padding-left: 260px;
                }

                #login_social{
                    height: 50px;
                    padding-top: 10px;
                    text-align: center;
                    font-size: 16px;
                    width: 75%;
                }

                .break-line p{
                    padding: 5px;
                    font-size: 10px;
                }

                #login_notice{
                    font-size: 16px;
                }

                #login_sign_up{
                    font-size: 16px;
                }

                #powered{
                    padding-top: 50px;
                    font-size: 14px;
                }

                #login_button{
                    width: 300px;
                    height: 40px;
                    font-size: 18px;
                }
       
            }

            @media only screen and (min-width: 1024px) and (max-width: 1280px){


                .banner-image{
                    width: 100%;
                    height: 650px;
                    object-fit: fill;
                }

                #header-area{
                    margin-top: 350px;
                    height: 100%;
                    padding: 10px 0px 0px 20px;
                }

                #header-area h1{
                    font-size: 36px;
                 }

                #header-area p{
                    font-size: 20px;
                }

                #login_form{
                    width: 340px;
                    margin-top: 25px;
                }

                #login_title{
                    font-size: 22px;
                    padding-top: 0px;
                }

                #logo_icon{
                    width: 50%;
                }

                #login_field{
                    font-size: 12px;
                    padding: 6px;
                    width: 100%;
                }

                .input-group{
                    padding: 5px 10px;
                    width: 78%;
                }

                #login_remember{
                    font-size: 12px;
                    padding-left: 45px;
                }

                #login_forgot{
                    font-size: 12px;
                    padding-left: 60px;
                }

                #login_social{
                    height: 40px;
                    padding-top: 10px;
                    text-align: center;
                    font-size: 12px;
                    width: 70%;
                }

                #iconsg{
                    width: 20%;

                }
                #iconsf{
                    width: 18%;
                }

                .break-line p{
                    padding: 5px 0px 0px 0px;
                    font-size: 9px;
                }

                #login_notice{
                    font-size: 16px;
                }

                #login_sign_up{
                    font-size: 16px;
                }

                #powered{
                    padding-top: 30px;
                    font-size: 12px;
                }

                #login_button{
                    width: 100px;
                    height: 30px;
                    font-size: 14px;
                }
       
            }


        </style>
    </head>

    <body>

        <div class="banner-image">
            <div class="row">

                <div id="header-area" class="col-7">
                    <h1>Lorem, ipsum dolor sit amet </h1>
                    <p>Aliquam nibh massa, fringilla a malesuada ut, sagittis ut sem. Quisque metus mauris, tristique nec lectus a, vehicula cursus elit.</p>
                </div>

        
                <div class="col-1"></div>
                
                <div id="login-container" class="col-3 right">
                    <div id="login_form" class="aside">

                        <div id="login_title"><p>Welcome to</p></div>

                        <div>
                            <img class="img-fluid" src="images/Logo2.png" alt="logo2" width="50px"> 
                            <img id="logo_icon" class="img-fluid" src="images/Logo1.png" alt="logo1" width="250px">  
                        </div>

                        <br>
                        
                        <div id="social_icons">
                            <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsg" src="images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Login with Google</a>
                            <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsf" src="images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Login with Facebook</a>
                        </div>

                        <div class="break-line"> 
                            <p>___________________________________ or ____________________________________</p>
                        </div>

                        <div class="input-group">
                            <input id="login_field" type="text" class="" placeholder="Email" aria-label="Email">
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
                            <a id="login_button" href="#login" class="btn btn-primary btn-md" >Log in</a>
                        </div>

                        <div>
                            <p id="login_notice" >Don't have an account yet? <a id="login_sign_up" href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signup">Sign up</a></p>
                        </div>   

                        <div id="powered">
                            Powered by <img src="images/power1.png" alt="" width="100px" >
                        </div>

                    </div>
                </div>
            </div>

             <!-- Sign Up Form -->
            <div  class="modal fade" id="signup" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                <div  class="modal-dialog">
                    <div id="signup_form" class="modal-content text-center">
                        <button id="close-tab" type=button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div id="signup_title" class="modal-header">
                            <p>Create Your Account</p>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="">  
                            <br>
                            <div>
                                <a id="signup_social" href="#" class="btn btn-primary btn-md" style="padding-left: 5px;"> <img src="images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Login with Google</a>
                                <a id="signup_social" href="#" class="btn btn-primary btn-md" style="padding-left: 5px;"> <img src="images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Login with Facebook</a>
                            </div>
                
                            <div class="break-line"> 
                                <p>___________________________________ or ____________________________________</p>
                            </div>
                
                            <div class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control d-bl" placeholder="Email" aria-label="Email"> <br>
                            </div>
                
                            <div class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control" placeholder="Password" aria-label="Password">
                            </div>
                
                            <div class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control" placeholder="Retype Password" aria-label="Retype Password">
                            </div>
                
                            <div id="login_remember" class="form-check justify-content-start text-start">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Remember Me
                                </label>
                            </div>
                
                            <div>
                                <a id="signup_button" href="#services" class="btn btn-primary btn-md" >Sign up</a>
                            </div>
                            
                            <div>
                                <p id="signup_notice" >Already have an account? <a id="signup_login_up" href="#tologin" class="text-decoration-none">Log in</a></p>
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
