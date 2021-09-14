<script >
  function showModal(){
    document.querySelector(".modal-bg").style.visibility = "visible";
    document.querySelector(".modal-bg").style.opacity = 1;
    document.querySelector("body").style.overflow = "hidden";
  }
  function closeModal(){
    document.querySelector(".modal-bg").style.visibility = "hidden";
    document.querySelector(".modal-bg").style.opacity = 0;
  }
</script>

<div class="container-fluid" id="bg">
  <p id="mainHeader">Lorem ipsum dolor sit amet</p>
  <p id="secondaryHeader">consectetur adipiscing elit, sed do eiusmod tempor </p>
</div>
<button type="button" id="buttonStart" onclick="showModal()">Get Started</button>
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
      <div class="modal-header">
      <button type="button" id="modal-close" class="float-right" onclick="closeModal()"><span>X</span></button>
      </div>
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



</div>