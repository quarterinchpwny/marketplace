<section >
    <div class="container-fluid banner-login">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-12 padding-0 banner">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/banner.png" class="d-block w-100" alt="banner picture">
                            <div class="carousel-caption d-none d-md-block">
                                <div>
                                    <p class="display-1">Lorem, ipsum dolor sit amet</p> 
                                </div>
                                <div>
                                    <p class="display-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui modi soluta dolorem tempore fugiat molestiae!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 text-light login">
                <div class="logo">
                    <img class="img-fluid" src="{{ URL::to('/') }}/NeutralHome_Graphics/RLOLogo.png" alt="logo"> 
                </div>
                <p class="display-6">Welcome to Rizal Law Office</p>

                <div class="input-group ">
                    <input id="login_field" type="text" class="form-control d-none d-sm-block" placeholder="Email" aria-label="Email"> <br>
                </div>
                <div class="input-group">
                    <input id="login_field" type="text" class="form-control d-none d-sm-block" placeholder="Password" aria-label="Password">
                </div>
                                <!-- small screens input -->
                <div class="sm-screen-input-group d-block d-sm-none">
                    <input id="login_field" type="text" class="form-control " placeholder="Email" aria-label="Email"> <br>
                </div>
                <div class="sm-screen-input-group d-block d-sm-none">
                    <input id="login_field" type="text" class="form-control " placeholder="Password" aria-label="Password">
                </div>
                <div id="login_remember" class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Remember Me
                    </label>
                </div>
                <div class="text-center login-button d-none d-sm-block">
                    <a class="btn" href="#" role="button">LOG IN</a>
                </div>
                <div class="text-center sm-screen-login-button d-block d-sm-none">
                    <a class="btn" href="#" role="button">LOG IN</a>
                </div>
                <div class="login_forgot text-center my-3">
                    <a href="#" class=" ">Forgot Password?</a>
                </div>
                <div class="text-center login-socials d-none d-sm-block"> 
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="">  LOG IN WITH FACEBOOK</a>
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/google_icon.png" alt="">LOG IN WITH GOOGLE</a>
                </div>
                <div class="text-center sm-screen-login-socials d-block d-sm-none"> 
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="" height="25px">  LOG IN WITH FACEBOOK</a>
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/google_icon.png" alt=""height="25px">LOG IN WITH GOOGLE</a>
                </div>
                <div class="text-center">
                    <br>
                    <p id="login_notice" >Don't have an account yet?</p>
                    <a id="login_create" href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signup">Create an Account</a>
                </div>
                <div id="powered">
                    Powered by <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_logo.png" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Register to Rizal Law Office</h4>
                        <button type=button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST">
                        @csrf    
                        <label for="modal-username" class="form-label"> Username:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="Username">
                        
                        <label for="modal-password" class="form-label"> Password:</label>
                        <input type="password" class="form-control" id="modal-email" placeholder="Password">
                        
                        <label for="modal-firstname" class="form-label"> First Name:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="First Name">
                        
                        <label for="modal-lastname" class="form-label"> Last Name:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="Last Name">
                        
                        <label for="modal-email" class="form-label"> Email Address:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="e.g. stabol@gmail.com">
                        
                        <label for="modal-contact" class="form-label"> Contact Number:</label>
                        <input type="text" class="form-control" id="modal-email" placeholder="e.g. 09123456789">
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" >Create an Account</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</section>