@extends('layouts.layout')


<div class="container align-center" style="padding-top: 2.4rem;padding-bottom: 2.4rem;height:65rem " id="step4">
    <div class="tracking-progress-bar text-center">
      <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
    
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
    
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">3</div>
    
      <span class="tracking-progress-bar__item__bar  tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">4</div>
    
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">5</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">6</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">7</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">8</div>
    </div>
  
  <form class="qq">
  <div class="p-3 pb-md-4 mx-auto text-center">
      <h2 class="display-5 fw-normal">Step 4 - Customize Your Website.</h1>
        <div class="container align-center" style="padding-top: 3rem;padding-bottom: 2.4rem; width:70%">
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr >
                <th style="width: 1%;"></th>
                <th style="width: 5%;">Product</th>
                <th style="width: 10%;">Price</th>
                <th style="width: 10%;">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="logo"/></td>
                <td> Logo</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="logo">Add</label></td>
              </tr>
              <tr class = "bg-light">
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="template"/></td>
                <td>Custom Template</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="template">Add</label></td>
              </tr>
            
    
            
              <tr>
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="cw"/></td>
                <td>Copy Writing</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="cw">Add</label></td>
              </tr>
              <tr class = "bg-light">
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="sp"/></td>
                <td>Stock Photos</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="sp">Add</label></td>
              </tr>
              <tr>
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="1"/></td>
                <td>TEST1</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="1">Add</label></td>
              </tr>
              <tr class = "bg-light">
                <td class ="text-end"><input class="form-check-input" type="checkbox"value=""id="2"/></td>
                <td>TEST 2</td>
                <td>5000</td>
                <td><label  class="w-50 btn  btn-orange" for="2">Add</label></td>
              </tr>
            </tbody>
            
          </table>
          
    </div>
  </div>
  <a class = "w-25 btn btn-lg btn-orange" href="{{route('step3', \Request::all())}}"> < Return </a>
  <a type="button" class="w-25 btn btn-lg btn-primary" id="next" onClick="onAddWebsite()" href="{{route('step5', \Request::all() )}}">Accept</a>
 
  </div>
  
  </div>
  </form>
