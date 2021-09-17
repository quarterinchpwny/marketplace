@extends('marketplace.layout')
<header class = "masthead">
    <div class="container"style="margin-top:auto">
      <div class="row align-items-center justify-content-between ">
        <div class="col-lg ">
          <div class="masthead-main">Start E-Lawyering. </div>
          <div class="masthead-subheading">Create Your Own Website with </div>
          <div class="masthead-heading"> LEXWEB WEBSITE BUILDER</div>
          <div class="container ">
          <a class="btn w-25 btn-lg btn-orange" href="{{route('login')}}">Login</a>
          <a class=" btn w-25 btn-lg btn-orange" href="{{route('step1')}}">Start Here</a>
          </div>
        </div>
        <div class="col">
        <img class="mw-100" style="margin-top:auto" src="/images/devices.png" alt="">
        </div>
    </div>
    </div>
  </header>
  