<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
            @if (Route::has('home'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
            @endif

            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Our Services') }}</a>
                </li>
            @endif

            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Law Update') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Law Practices') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Everyday Law') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Blog') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Profile') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atty. {{ Auth::user()->lawyer->first_name.' '.Auth::user()->lawyer->last_name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </ul>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>


@section('testing')


<img src="/images/bgLandingPage.png" class="landingBackground" alt="bgHomeImage" width="1350" height="720">
<div class="container" id="lblue-signup">
    <!-- Sign up -->
    <div class="row align-items-center">
        <div class="col-sm-4">
                <input class="form-control form-control-lg" type="text" placeholder="E-mail Address" >
        </div>
        <div class="col-sm-4">
                <input class="form-control form-control-lg" type="text" placeholder="Password" >
        </div>
        <div class="col-sm-4">
                <button type="button" id="buttonBlue">Log in</button>
        </div>
    </div>
    <div class="secondRow">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <p>Remember me</p>
        </div>
        <div class="col-sm-4">
         <a href="url">Forgot Password?</a>
        </div>
    </div>
    </div>
    <div class="thirdRow">
    <div class="row align-items-center">
    <div class="col-sm-7">
         <a href="url">Don't have an account yet? Sign Up.</a>
        </div>
    </div>
    </div>
    <div class="lastRow">
    <div class="row align-items-center">
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2">Sign in with Facebook</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2">Sign in with Google</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2">Sign in with ios</button>
        </div>
    </div>
    </div>
</div>


<!-- Our Services -->
<div class="container-fluid" id="blue-rect"><p id="headerStyleWhite">OUR SERVICES</p></div>
<div class="container-fluid" id="frameWhite"></div>
<!-- Practice Areas -->
<div class="container-fluid" id="white-rect"><p id="headerStyleBlue">PRACTICE AREAS</p></div>
<div class="container-fluid" id="frameBlue">
<div class="card">
        <img src="/images/Family.jpg" class="card-img-top">
        <a href="#" class="btn btn-primary">Personal & Family Law</a>
</div>
</div>
<!-- Law Updates -->
<div class="container-fluid" id="white-rect"><p id="headerStyleBlue">LAW UPDATES</p></div>
<div class="container-fluid" id="frameBlue">

      <div class="card-body">
        <h5 class="card-title">Can your text message or e-mail message be used as evidence in court?</h5>
        <p class="card-text">Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as contracts, agreements, letters and other writings.

These writings printed in papers or paper-based documents are popularly known then as our documentary evidence.

At that time, text message or e-mail message, as it was not yet widely used and known in the Philippines, are not considered as documentary evidence by our courts of law.</p>
        <a href="#" class="btn btn-primary">Learn more</a>
      </div>

      <img src="/images/laptop-lawupdates.jpg" class="lawUpdatesImage" alt="LapUpdatesPic" width="550" height="300">
</div>
<!-- Everyday Law -->
<div class="container-fluid" id="blue-rect"><p id="headerStyleWhite">EVERYDAY LAW</p></div>
<div class="container-fluid" id="frameWhite">
<div class="card-body">

        <h5 class="card-title">Co-maker ng ‘di nagbayad sa utang, tama ba na ikaw ang singilin?</h5>
        <p class="card-text">Nakapirma ka na ba sa loan agreement bilang co-maker? <br>

        Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan?
        </p>
        <a href="#" class="btn btn-primary">Learn more</a>
      </div>


</div>
<!-- Footer -->

<footer class="text-center text-lg-start text-light pt-5" style="background-color: #092059;">
  <!-- Section: Social media -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
           Lorem ipsum dolor sit amet
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Visit
          </h6>
          <p class="text-left">
            Unit 608, 6th floor,
            AIC Burgundy Empire Tower
            ADB Avenue corner Garnet Road
            Ortigas Center, Pasig City
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p class="text-left">
            (02) 84511594
            contact@rizallawoffice.com
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Socials
          </h6>
          <p><i class="fas fa-home me-3"></i> ignition</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <ul><a href="">Terms of Use</a>
    <a href="">Privacy Policy</a>
    <a href="">Informed Consent of Service Performed</a>
    <a href="">Disclaimer</a></ul>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->





@endsection
