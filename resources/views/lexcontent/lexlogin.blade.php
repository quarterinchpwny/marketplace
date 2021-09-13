<section id="login">
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-5 col-lg-9 d-none d-md-block padding-0">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/banner.png" class="d-block w-100" alt="banner picture" width="1289px" height="825px">
                            <div class="carousel-caption d-none d-md-block">
                                <div id="headline">Lorem, ipsum dolor sit amet </div>
                                <div id="subheadline">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui modi soluta dolorem tempore fugiat molestiae!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="login_panel" class="col-lg-3 padding-0" style="height: 825px;" >
                <div class="p-5 text-dark">
                    <div class="co-md-5 text-center" >
                        <div>
                            <img class="img-fluid" src="{{ URL::to('/') }}/NeutralHome_Graphics/RLOLogo.png" alt="logo"> 
                        </div>
                        <div id="login_title"><p class = "p-welcome">Welcome to Rizal Law Office</p></div>
                        
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
                                </label>
                        </div>
                        <div>
                            <a href="#" class="btn login_button" >LOG IN</a>
                        </div>                            
                        <div>
                            <a id="login_forgot" href="#" class="text-decoration-none">Forgot Password</a>
                        </div>                           
                        <div>
                            <a href="#" class="btn login_button"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="">LOGIN WITH FACEBOOK</a>
                            <a href="#" class="btn login_button"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/google_icon.png" alt="">LOGIN WITH GOOGLE</a>
                        </div>
                        <div id="hr">
                            <p><hr class="hr-login"></p>
                        </div>
                        <div>
                            <p id="login_notice" >Don't have an account yet?</p>
                            <a id="login_create" href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signup">Create an Account</a>
                        </div>
                    </div>
                    <div id="powered">
                        Powered by <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_logo.png" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
