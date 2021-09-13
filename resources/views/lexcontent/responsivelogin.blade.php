<section id="banner-login">
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
                <p class="display-6">Welcome to Rizal Law Office</p>
                <div class="input-group mb-3">
                    <input id="login_field" type="text" class="form-control d-bl" placeholder="Email" aria-label="Email"> <br>
                </div>
                <div class="input-group mb-3">
                    <input id="login_field" type="text" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div id="login_remember" class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Remember Me
                    </label>
                </div>
                <div class="text-center login-button">
                    <a class="btn" href="#" role="button">LOG IN</a>
                </div>
                <div class="login_forgot text-center my-3">
                    <a href="#" class=" ">Forgot Password?</a>
                </div>
                <div class="text-center login-socials"> 
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="">LOGIN WITH FACEBOOK</a>
                    <a  href="#" class="btn"> <img src="{{ URL::to('/') }}/NeutralHome_Graphics/google_icon.png" alt="">LOGIN WITH GOOGLE</a>
                </div>
            </div>
        </div>
    </div>
</section>