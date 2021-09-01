@extends('layouts.app')
EEEE
@section('testing')

<img src="/images/bgLandingPage.png" class="landingBackground" alt="bgHomeImage" width="1350" height="720">
<div class="container" id="lblue-signup">

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



@endsection
