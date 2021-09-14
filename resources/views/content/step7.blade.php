@extends('layouts.layout')
<div class="container " style="padding-top: 2.4rem;padding-bottom: 2.4rem;" id="step7">
  <div class="tracking-progress-bar text-center">
    <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">3</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active "></span>
    <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">4</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">5</div>
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">6</div>
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">7</div>
    <span class="tracking-progress-bar__item__bar "></span>
    <div class="tracking-progress-bar__item ">8</div>
  </div>


<div class="p-3 pb-md-4 mx-auto text-center">
    <h2 class="display-5 fw-normal">Step 7 - Complete Your Payment</h2>
    
  </div>


  
  <div class=" pb-md-4 mx-auto">

      
        <div class="container"style="margin-top:auto">
          <div class="row align-items-center justify-content-between ">
           
            <div class="col-lg bg-light m-3 p-3 " style="height: 34rem">
              <h2 class="mb-4" style="color: #F4512C !important">Order Summary</h2>
              
             
            </div>
           
          <div class="col-lg bg-light m-3 p-3 " style="height: 34rem">
          <div>
            <h2 class="mb-4 ">Payment Method</h2>
            
          </div>
          </div>
      </div>
      <div class="text-center p-3">
        <a class = "w-25 btn btn-orange" href="{{route('step6', \Request::all())}}">Back</a>
        <a type="button" class="w-25 btn btn-primary " href="{{route('step8', \Request::all())}}">Next</a>
      </div>
  </div>
</div>
