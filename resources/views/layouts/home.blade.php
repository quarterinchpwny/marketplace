@extends('layouts.app')

@section('signUp')
<div class="container-fluid" id="bg">
  <p id="mainHeader">Lorem ipsum dolor sit amet</p>
  <p id="secondaryHeader">consectetur adipiscing elit, sed do eiusmod tempor </p>
</div>
<div class="container" id="lblue-signup">
    <!-- Sign up -->
       
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <input class="form-control form-control-lg emailtf" type="text" placeholder="E-mail Address" >
        </div>
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <input class="form-control form-control-lg passtf" type="text" placeholder="Password" >
        </div>
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <button type="button" id="buttonBlue">Log in</button>
        </div>

 
        
        <div class="col-sm-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
        </div>
        </div>
        <div class="col-sm-4 forgotPass">
              <a href="url"><strong>Forgot Password?</strong></a>
        </div>
       
        <div class="col-sm-7 signupButton">
         <a href="url">Don't have an account yet? <strong>Sign Up.</strong></a>
        </div>

        <div class="buttonsSignin">
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/facebookLogo.svg" alt="facebook logo" height=25px width=25px>&nbsp Sign in with Facebook</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/googleLogo.svg" alt="google logo" height=25px width=25px>&nbsp Sign in with Google</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/appleLogo.svg" alt="apple logo" height=25px width=25px>&nbsp Sign in with ios</button>
        </div>
        </div>
</div>
<div class="modal-bg">
    <div class="modal">
      <div class="modal-header">Hello! Icon Goes Here</div>
        <input class="form-control form-control-md emailtf" type="text" placeholder="E-mail Address" >
        <input class="form-control form-control-md passtf" type="text" placeholder="Password" >
        <div class="rowModal d-flex justify-content-between">   
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
            </div>   
            <a href="url"><strong>Forgot Password?</strong></a>
        </div>
        <button type="button" id="buttonModalLog">Log in</button>
        <div class="strike"><span>or</span></div>
        <button type="button" id="buttonModal"><img src="/images/facebookLogo.svg" alt="facebook logo" height=25px width=25px>&nbsp Sign in with Facebook</button>
        <button type="button" id="buttonModal"><img src="/images/googleLogo.svg" alt="google logo" height=25px width=25px>&nbsp Sign in with Google</button>
        <button type="button" id="buttonModal"><img src="/images/appleLogo.svg" alt="apple logo" height=25px width=25px>&nbsp Sign in with ios</button>
        <a href="url">Don't have an account yet? <strong>Sign Up.</strong></a>
      </div> 
</div>

<button type="button" id="buttonStart">Get Started</button>

</div>



@endsection
@section('Services')
<!-- Our Services -->
<div class="container-fluid" id="blue-rect"><p id="headerStyleWhite">OUR SERVICES</p>

</div>
<div class="container-fluid servicesFrame" id="frameWhiteServices">

<div class="row" id="servicesRow">
      <div class="col-xs-2 col-s-2 col-md-3 col-lg-3">
        <div class="card text-center mb-4 p-4">
          <img src="/images/assistIcon.png"  width="100" height="100">
          <br>
          <h2 id="textStyle"> <strong>ASSIST </strong></h2>
          <br>
          <p id="textStyle">Free legal assesment</p>
          <br>
          <br>
          <a href="#" class="btn btn-primary text-light">Ask Lawyers</a>
        </div>
      </div>
      <div class="col-xs-2 col-s-2 col-md-3 col-lg-3">
        <div class="card text-center mb-4 p-4">
          <img src="/images/consultIcon.png"  width="100" height="100">
          <br>
          <h2 id="textStyle"><strong>CONSULT</strong></h2>
          <br>
          <p id="textStyle">Paid legal consultation</p>
          <br>
          <br>
          <a href="#" class="btn btn-primary text-light">Submit Legal Problem</a>
        </div>
      </div>
      <div class="col-xs-2 col-s-2 col-md-3 col-lg-3">
        <div class="card text-center mb-4 p-4">
          <img src="/images/worksIcon.png"  width="100" height="100">
          <br>
          <h2 id="textStyle"><strong>WORKS</strong></h2>
          <br>
          <p id="textStyle">Free legal fee crowdsourcing<br> and paid legal works <br> escrow delivery</p>
          <a href="#" class="btn btn-primary text-light">Request Proposal</a>
        </div>
      </div>
      <div class="col-xs-2 col-s-2 col-md-3 col-lg-3">
        <div class="card text-center mb-4 p-4">
          <img src="/images/docsIcon.png" width="100" height="100">
          <br>
         <h2 id="textStyle"><strong>DOCS</strong></h2>
         <br>
          <p id="textStyle">Create your own legal documents from hundreds <br>of templates</p>
          <a href="#" class="btn btn-primary text-light">Create Legal Document</a>
        </div>
      </div>

</div>

</div>
@endsection
@section('PracticeAreas')
<!-- Practice Areas -->

<div class="container-fluid" id="white-rect">
    <p id="headerStyleBlue">PRACTICE AREAS</p>
</div>
<div class="container-fluid" id="frameWhiteBig">
<div class="row practicesRow">
      <div class="col-md-3 col-lg-3 col-xs-6  px-3">
        <div class="family_card card">
          <img src="/images/Family.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Personal & Family Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Civil.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Civil Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Commercial.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Commercial Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Labor.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Labor Law</a>
        </div>
      </div>
</div>
<div class="row py-5 practicesRow">
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Immigration.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Immigration Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Criminal.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Criminal Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Taxation.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary ">Taxation Law</a>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <div class="card">
          <img src="/images/Special.jpg" class="areasChoices">
          <a href="#" class="areasButton btn btn-primary">Special Services</a>
        </div>
      </div>
      <div class="row py-3"></div>
      <a href="#" class="btn btn-primary mx-auto buttonWhite">See more</a>
</div>
</div>

@endsection
@section('LawUpdates')
<!-- Law Updates -->
<div class="container-fluid" id="blue-rect"><p id="headerStyleWhite">LAW UPDATES</p></div>

<div class="container-fluid" id="frameWhite">
<div class="col-md-12 col-lg-6">
      
      <div class="card-body">
        <h5 class="card-title cardTitle">Can your text message or e-mail message be used as evidence in court?</h5>
        <p class="card-text cardText">Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as contracts, agreements, letters and other writings.
        <br>
        <br>
These writings printed in papers or paper-based documents are popularly known then as our documentary evidence.
        <br>
        <br>
At that time, text message or e-mail message, as it was not yet widely used and known in the Philippines, are not considered as documentary evidence by our courts of law.</p>
        <a href="#" class="btn btn-primary text-light">Learn more</a>
      </div>
      </div>

      <div class="col-md-12 col-lg-6">
      <img src="/images/laptop-lawupdates.jpg" class=" lawUpdatesImage" alt="LapUpdatesPic" width="550" height="300">
      </div>
</div>

@endsection
@section('EverydayLaw')
<!-- Everyday Law -->
<div class="container-fluid" id="white-rect"><p id="headerStyleBlue">LAW UPDATES</p></div>

<div class="container-fluid" id="frameWhite">

      <div class="col-md-12 col-lg-6">
        <div class="card-body evrcard">

                 <h5 class="card-title cardTitle evrcardfont">Co-maker ng ‘di nagbayad sa utang,
                     <br>tama ba na ikaw ang singilin?</h5>
                  <p class="card-text cardText evrcardfont">Nakapirma ka na ba sa loan agreement bilang co-maker? <br>

            Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan?
            </p>
            <a href="#" class="btn btn-primary evrbtn">Learn more</a>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
          <img src="/images/eLaw.png"  alt="video" id="everydayLawVid">
        </div>
   
</div>
@endsection
@section('Footer') --}}
<!-- Footer -->

<
<footer class="text-center text-lg-start text-light pt-0" style="background-color: #092059;">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-md-start mt-2">
      <!-- Grid row -->
      <div class="row mt-3 contentsFooter">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <div class="container-fluid" >
                <img src="/images/rizalLogo.png" alt="Rizal Logo" id="logoFooter">
          </div>

          <p>
           Lorem ipsum dolor sit amet
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 ms-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" id="footerHeading">
            Visit
          </h6>
          <p class="text-left" id="footerInfo">
            Unit 608, 6th floor,<br>
            AIC Burgundy Empire Tower
            ADB Avenue corner Garnet Road
            Ortigas Center, Pasig City
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 " id="footerHeading">
            Contact
          </h6>
          <p class="text-left" id="footerInfo" >
            (02) 84511594
            contact@rizallawoffice.com
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 ms-5">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" id="footerHeading">
            Socials
          </h6>
          <div>
            <a href="#" class="me-3 text-reset">
                <img src="/images/fbLogo.svg" alt="facebook logo" height=25px width=25px>
            </a>
            <a href="" class="me-3 text-reset">
                <img src="/images/linkedInLogo.svg" alt="LinkedIn logo" height=25px width=25px>
            </a>
            <a href="" class="me-3 text-reset">
                <img src="/images/ytLogo.svg" alt="YouTube logo" height=25px width=25px>
            </a>
            <a href="" class="me-3 text-reset">
                <img src="/images/igLogo.svg" alt="Instagram logo" height=25px width=25px>
            </a>
            <a href="" class="me-3 text-reset">
                <img src="/images/twtLogo.svg" alt="Twitter logo" height=25px width=25px>
            </a>
          </div>
        </div>
        <!-- Grid column -->
      </div>

      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <hr class="style1">
  <!-- Copyright -->
  <div class="container text-center text-md-start mt-2">
        <p class="text-left p-4 poweredBy">Powered by <img src="/images/lexmeetLogo.png"  alt="lexlogo" height="13" width="85"></p>

  <div class="text-right p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <ul>
    <a href="" id="linksLegal">Terms of Use</a>
    <a href="" id="linksLegal">Privacy Policy</a>
    <a href="" id="linksLegal">Informed Consent of Service Performed</a>
    <a href="" id="linksLegal">Disclaimer</a></ul>
  </div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection

