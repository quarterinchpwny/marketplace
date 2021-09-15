@extends('layouts.layout')




<div class="container " style="padding-top: 2.4rem;" id="step2">
    <div class="tracking-progress-bar text-center">
      <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
    
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
    
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item ">3</div>
    
      <span class="tracking-progress-bar__item__bar "></span>
      <div class="tracking-progress-bar__item ">4</div>
    
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">5</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">6</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">7</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">8</div>
    </div>
  
    <div class="p-3 pb-md-4 mx-auto text-center">
      <h2 class="display-5 fw-normal p-2"><b>Step 2</b> - Set up your Domain</h2>
        <section class="step2Box">
          <div class="container">
          <div class="row">
          <div class="col-sm-12">
            <div class="content">
            <h2 >Create a New Domain</h2>
            <hr style = "height: .2rem">
            <h3 class="text-start p-2" style="color:#F4512C">Enter Law Office Name</h3>
            <div class="input-group">
                
                   <input  class="form-control" placeholder="Ex. lawfirm.lexmeet.com" id="url" name="url">
                   <span class="input-group-btn ">
                   <p class="btn btn-lg" >.lexmeet.com</p>
                   </span>
                    </div>
                    
            </div>
            <a class = "w-25 btn  btn-orange" href="{{route('step1', \Request::all())}}">Back </a>

            <a type="button" class="w-25 btn btn-primary " onclick = "urlStore()"href="{{route('step3', \Request::all())}}">Next</a>
  
          </div>
          </div>
          </div>
          </section>
    </div>
    
  </div>
  