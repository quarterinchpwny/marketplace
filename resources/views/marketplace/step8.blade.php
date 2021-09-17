@extends('marketplace.layout')
<header class = "masthead">

    <div class="p-3 pb-md-4 mx-auto text-center">
        
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-between ">
          <div class="col-lg ">
            <div class="main">Congratulations on Your Subscription!</div>
            <div class="subheading">Start adding contents on your website to start e-Lawyering</div>
            <div class="heading"> LEXWEB WEBSITE BUILDER</div>
            <a class="w-100 btn btn-lg btnviolet" href="{{route('step7', \Request::all())}}">EDIT</a>
          </div>
         
          <div class="col">
          <img class="mw-100" style="margin-top:auto" src="/marketplace-images/devices.png" alt="">
          </div>
      </div>
      
      </div>
    </header>
    