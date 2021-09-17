<html>
    <head>     
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <!-- Script -->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/feminine.css') }}" rel="stylesheet"> 

        <title>Law Office - Homepage</title>    

    </head>

    <body>
        <div class="banner-image">
            <div class="row">
                <div id="header-area" class="col-6">
                    <h1>Lorem, ipsum dolor sit amet </h1>
                    <p>Aliquam nibh massa, fringilla a malesuada ut, sagittis ut sem. Quisque metus mauris, tristique nec lectus a, vehicula cursus elit.</p>
                </div>

        
                <div class="col-1"></div>
                
                <div id="login-show" class="col-2 right">
                    <form action="" method="post">
                        <div id="login_form" class="aside">
                            <div id="login_title"><p>Welcome to</p></div>

                            <div>
                                <img class="img-fluid" src="Feminine-Images/Logo2.png" alt="logo2" width="50px"> 
                                <img id="logo_icon" class="img-fluid" src="Feminine-Images/Logo1.png" alt="logo1" width="250px">  
                            </div>

                            <br>

                            <div id="social_icons">
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsg" src="Feminine-Images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Login with Google</a> <p> </p>
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsf" src="Feminine-Images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Login with Facebook</a>
                            </div>

                            <div class="break-line"> 
                                <p> or </p>
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
                                Powered by <img src="Feminine-Images/power1.png" alt="" width="100px" >
                            </div>

                        </div>
                    </form>
                    
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

                        <div id="social_icons">
                                <a id="signup_social" href="#" class="btn btn-primary btn-md" style="padding-left: 5px;"> <img src="Feminine-Images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Sign up with Google</a> <p> </p>
                                <a id="signup_social" href="#" class="btn btn-primary btn-md" style="padding-left: 0px;"> <img src="Feminine-Images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Sign up with Facebook</a>
                        </div>

                        <div class="modal-body">
                        <form method="POST" action="">  

                
                            <div class="break-line-signup"> 
                                <p> or </p>
                            </div>
                
                            <div id="input_signup" class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control d-bl" placeholder="Email" aria-label="Email"> <br>
                            </div>
                
                            <div id="input_signup" class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control" placeholder="Password" aria-label="Password">
                            </div>
                
                            <div id="input_signup" class="input-group mb-3">
                                <input id="signup_field" type="text" class="form-control" placeholder="Retype Password" aria-label="Retype Password">
                            </div>
                
                            <div id="signup_remember" class="form-check justify-content-start text-start">
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
                                Powered by <img src="Feminine-Images/power1.png" alt="" width="100px" >
                            </div>
                            
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

        <div id="login-container" class="right">
                    <form action="" method="post">
                        <div id="login_form" class="aside">
                            <div id="login_title"><p>Welcome to</p></div>

                            <div>
                                <img class="img-fluid" src="Feminine-Images/Logo2.png" alt="logo2" width="50px"> 
                                <img id="logo_icon" class="img-fluid" src="Feminine-Images/Logo1.png" alt="logo1" width="250px">  
                            </div>

                            <br>

                            <div id="social_icons">
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsg" src="Feminine-Images/google.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="55px">Login with Google</a> <p> </p>
                                <a id="login_social" href="#" class="btn btn-primary btn-md" style="padding-left: 2px;"> <img id="iconsf" src="Feminine-Images/facebook.png" alt="" style="padding-left: 10px; padding-right: 5px;" width="47px">Login with Facebook</a>
                            </div>

                            <div class="break-line"> 
                                <p> or </p>
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
                                Powered by <img src="Feminine-Images/power1.png" alt="" width="100px" >
                            </div>

                        </div>
                    </form>
                    
                </div>

                <div class="bannerDiv">
                    <p>banner image</p>
                    <img src="Feminine-Images/banner-header-image.jpeg" alt="">
                </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <script>
            //store image link inside a variable for later use
            var getImageLink = $('.bannerDiv img').attr('src');

            // add the link from the variable to background image for the div
            $('.banner-image').css('background-image','url('+ getImageLink +')');

            //remove the banner image 
            $('.bannerDiv').hide()
       </script>

    </body>
</html>
