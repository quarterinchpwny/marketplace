<!-- Sign up -->
 <!-- ALERT -->

 <div class="container-fluid py-0" id="bg">
        @if (session('success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
                  @endif
        @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                      {{ session('error') }}
                    </div>
                  @endif
      <!-- ALERT -->
  <p id="mainHeader">Lorem ipsum dolor sit amet</p>
  <p id="secondaryHeader">consectetur adipiscing elit, sed do eiusmod tempor </p>
</div>
<button type="button" id="buttonStart" onclick="showModal()">Get Started</button>



<form class ="formModal" action="{{ route('post.login') }}" method="POST">
  @csrf
<div class="container" id="lblue-signup">
    
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <input class="form-control form-control-lg emailtf" type="email" placeholder="E-mail Address" name="email">
        </div>
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <input class="form-control form-control-lg passtf" type="password" placeholder="Password" name="password">
        </div>
        <div class="col-md-4 mb-3 col-sm-4 col-xs-6">
                <button type="submit" id="buttonBlue">Log in</button>
        </div>
</form>


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
           
       
        <div class="col-sm-4 signupButton mx-auto">
         <a href="url">Don't have an account yet? <strong>Sign Up.</strong></a>
        </div>

        <div class="buttonsSignin">
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/masculineImages/facebookLogo.svg" alt="facebook logo" height=25px width=25px>&nbsp Sign in with Facebook</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/masculineImages/googleLogo.svg" alt="google logo" height=25px width=25px>&nbsp Sign in with Google</button>
        </div>
        <div class="col-sm-4">
                    <button type="button" id="buttonBlue2"><img src="/images/masculineImages/appleLogo.svg" alt="apple logo" height=25px width=25px>&nbsp Sign in with ios</button>
        </div>
        </div>
</div>
<div class="modal-bg">
  
<form class ="formModal" action="{{ route('post.login') }}" method="POST">
  @csrf
    <div class="modal">
      <div class="modal-header">
      <button type="button" id="modal-close" class="float-right" onclick="closeModal()"><span>X</span></button>
      </div>
        <input class="form-control form-control-md emailtf" type="text" placeholder="E-mail Address" name="email">
        <input class="form-control form-control-md passtf" type="text" placeholder="Password" name="password">
        <div class="rowModal d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
            </div>
            <a href="url"><strong>Forgot Password?</strong></a>
        </div>
        <button type="submit" id="buttonModalLog">Log in</button>
        </form>
        <div class="strike"><span>or</span></div>
        <button type="button" id="buttonModal"><img src="/images/masculineImages/facebookLogo.svg" alt="facebook logo" height=25px width=25px>&nbsp Sign in with Facebook</button>
        <button type="button" id="buttonModal"><img src="/images/masculineImages/googleLogo.svg" alt="google logo" height=25px width=25px>&nbsp Sign in with Google</button>
        <button type="button" id="buttonModal"><img src="/images/masculineImages/appleLogo.svg" alt="apple logo" height=25px width=25px>&nbsp Sign in with ios</button>
        <a href="url">Don't have an account yet? <strong>Sign Up.</strong></a>
      </div>

</div>
</div>
<!-- Sign up -->