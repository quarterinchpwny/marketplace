@extends('layouts.layout')
@section('main')
<header class = "masthead">
  <div class="container"style="margin-top:auto">
    <div class="row align-items-center justify-content-between ">
      <div class="col-lg ">
        <div class="masthead-main">Start E-Lawyering. </div>
        <div class="masthead-subheading">Create Your Own Website with </div>
        <div class="masthead-heading"> LEXWEB WEBSITE BUILDER</div>
        <a class="w-100 btn btn-lg btn-primary" href="#step1">START HERE</a>
      </div>
     
      <div class="col">
      <img class="mw-100" style="margin-top:auto" src="/images/devices.png" alt="">
      </div>
  </div>
  
  </div>
</header>



<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>
    

<div class="container" style="padding-top: 2.4rem;padding-bottom: 2.4rem; max-width: 960px;" id="step1">
  <div class="tracking-progress-bar text-center">
    <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
  
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item ">2</div>
  
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
    <h2 class="display-5 fw-normal">Step 1 - Choose Your Plan</h2>
    
  </div>


<main>
    
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Basic</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">???5,000<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          
          <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Basic</th>
                    <th style="width: 22%;">Unli</th>
                    <th style="width: 22%;">Pro</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
        
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
                
              </table>
              <button type="button" class="w-100 btn btn-lg btn-orange">Select</button>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">Unlimited</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">???25,000<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          
          <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Basic</th>
                    <th style="width: 22%;">Unli</th>
                    <th style="width: 22%;">Pro</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start ">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
        
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="w-100 btn btn-lg btn-primary">Select</button>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Professional</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">???20,000<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          
          <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Basic</th>
                    <th style="width: 22%;">Unli</th>
                    <th style="width: 22%;">Pro</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
        
                <tbody>
                  <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                  <tr class = "bg-light">
                    <th scope="row" class="text-start">Security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  </tr>
                </tbody>
              </table>
              <a type="button" class="w-100 btn btn-lg btn-orange" href="#step2">Select</a>
            </div>
        </div>
      </div>
      
    </div>
    
  </div>

  

</main>
</div>


<div class="container " style="padding-top: 2.4rem;padding-bottom: 2.4rem;" id="step2">
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
    <h2 class="display-5 fw-normal">Step 2 - Set up your Domain</h2>
      <section class="newsletter">
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <div class="content">
            <h2 class="q">Create a New Domain</h2>
          <div class="input-group">
                 <input type="email" class="form-control" placeholder="Ex. lawfirm.lexmeet.com">
                 <span class="input-group-btn">
                 <p class="btn" >.lexmeet.com</p>
                 </span>
                  </div>
          </div>
          <a type="button" class="w-25 btn btn-lg btn-primary" href="#step3">Next</a>

        </div>
        </div>
        </div>
        </section>
  </div>
</div>

<div class="container " style="padding-top: 2.4rem;padding-bottom: 2.4rem;" id="step3">
  <div class="tracking-progress-bar text-center">
    <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active" >3</div>
  
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
    <h2 class="display-5 fw-normal">Step 3 - Select your Website Template.</h1>
      <div class="album py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4" >
              <div class="card mb-4 box-shadow">
                <img class="card-img-top p-3"style="height: 34rem; display: block;" src="/images/no2.png " data-holder-rendered="true">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                      <a type="button" class="w-100 btn btn-lg btn-orange" href="#step2">Select</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top p-3"style="height: 34rem; width: 100%; display: block;" src="/images/no2.png" data-holder-rendered="true">                
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                      <a type="button" class="w-100 btn btn-lg btn-orange" href="#step2">Select</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top p-3"style="height: 34rem; width: 100%; display: block;" src=" /images/no2.png" data-holder-rendered="true">                
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                      <a type="button" class="w-100 btn btn-lg btn-orange" href="#step4">Select</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

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
        <table class="table ">
          <thead>
            <tr>
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
<button type="button" class="w-25 btn btn-lg btn-primary" id="next">Next</button>
</div>

</div>
</form>

<div class="container " style="padding-top: 2.4rem;padding-bottom: 2.4rem;" id="step5">
  <div class="tracking-progress-bar text-center">
    <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">3</div>
  
    <span class="tracking-progress-bar__item__bar  tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">4</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">5</div>
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item">6</div>
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item">7</div>
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item">8</div>
  </div>


<div class="p-3 pb-md-4 mx-auto text-center">
    <h2 class="display-5 fw-normal">Step 5 - Check Your Order</h1>
      <div class="container align-center" style="padding-top: 3rem;padding-bottom: 2.4rem; width:70%">
        <div class="table-responsive">
          <table class="table " id="tables">
            <thead>
              <tr>
            
                <th style="width: 20%;">Product</th>
                <th style="width: 20%;">Price</th>
                <th style="width: 20%;">Quantity</th>
                <th style="width: 20%;">Total Amount</th>
                <th style="width: 20%;">Action</th>
              </tr>
            </thead>
            <tbody id="tbv">
     

            </tbody>
            
          </table>
          
    </div>
  </div>
  </div>
</div>

<script>
    var checkBoxLogo = document.getElementById("logo");
    var checkBoxTemplate = document.getElementById("template");
    var checkBoxCW = document.getElementById("cw");
    var checkBoxSP = document.getElementById("sp");
    var checkBox1 = document.getElementById("1");
    var checkBox2 = document.getElementById("2");
    
  const formEl = document.querySelector(".qq");
  const tbodyEl = document.getElementById("tbv");
  const tableEl = document.getElementById("tables");
  function onAddWebsite(e){
    e.preventDefault();
    window.location.href = "#step5";

    if (checkBoxLogo.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>Logo</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(1)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box1"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(1)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val1">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
   
    } 
    if (checkBoxTemplate.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>Template</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(2)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box2"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(2)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val2">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
    } 
    if (checkBoxCW.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>Content Writing</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(3)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box3"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(3)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val3">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
    } 
    if (checkBoxSP.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>Stock Photos</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(4)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box4"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(4)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val4">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
    } 
    if (checkBox1.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>Test1</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(5)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box5"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(5)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val5">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
    } 
    if (checkBox2.checked == true){
      tbodyEl.innerHTML += `
        <tr>
            <td><h4>test2</h4></td>
            <td><h4>5000</h4></td>
            <td>
            <div class="input-group">
            <button onclick="dec(6)" class = "btn btn-number btn-orange">-</button>
            <input type="text" id="box6"  value ="1" class="form-control text-center" style="width:20%">
            <button onclick="inc(6)" class = "btn btn-number btn-orange">+</button>
            </div>
            </td>
            <td><h4 id = "val6">5000</h4></td>
            <td><button class="deleteBtn btn-primary btn">Delete</button></td>
        </tr>
    `;
    } 


  }
  var data = 1;
  function dec(x){
    data=parseInt(document.getElementById("box".concat(x)).value);

    data=data-1;
    document.getElementById("box".concat(x)).value=data;
    data=parseInt(document.getElementById("val".concat(x)).innerText);
    document.getElementById("val".concat(x)).innerText=data-5000;
  }


  function inc(x){
    data=parseInt(document.getElementById("box".concat(x)).value);
    data=data+1;
    
    document.getElementById("box".concat(x)).value=data;
    document.getElementById("val".concat(x)).innerText=data*5000;
  }

 

  function onDeleteRow(e) {
    if (!e.target.classList.contains("deleteBtn")) {
      return;
    }

    const btn = e.target;
    btn.closest("tr").remove();
  }
  document.getElementById("next").addEventListener("click",onAddWebsite);

 
  tableEl.addEventListener("click", onDeleteRow);
</script>




<div class="container " style="padding-top: 2.4rem;padding-bottom: 10rem;" id="step6">
  <div class="tracking-progress-bar text-center">
    <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">3</div>
  
    <span class="tracking-progress-bar__item__bar  tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active ">4</div>
  
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">5</div>
    <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
    <div class="tracking-progress-bar__item tracking-progress-bar__item--active">6</div>
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item">7</div>
    <span class="tracking-progress-bar__item__bar"></span>
    <div class="tracking-progress-bar__item">8</div>
  </div>


<div class="p-3 pb-md-4 mx-auto">
    <h2 class="display-5 fw-normal text-center">Step 6 - Review your Subscription Agreement</h1>
      
        <div class="container"style="margin-top:auto">
          <div class="row align-items-center justify-content-between ">
           
            <div class="col-lg bg-light m-3 p-3 " style="height: 34rem">
              <h2 class="mb-4" style="color: #F4512C !important">Subscription Agreement</h2>
              <div class ="overflow-auto p-3 scrollbar scrollbar-primary" style="height: 25rem;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viqu cofo bet be pafydybu ja, bela, 
              rub delil fimelamep retoem debeli, citime. Quem, to canu me ni lecabara vihamepoebu fivecelu 
              li lal syquati merynivyda mifesed berofi fefa. Fefuj femaj do, pocad hysas se di fyledoe beleb 
              bal pe. Mi, lilahe pip many mimole bipoe, pecem difoeb lanalulabe, fij jisof quyv.
              
              Led deli ma peb medo jivi lo diram bape, lify le, mequ divefim come matam. Sap fi, di miba bu 
              mele mivedi nan didemoeb no demi mam. Lib, label lel fomubufe, mob ronival, dybiril cebafe dab 
              coebi mel doeril. Rubade debilave ne babab baret si homif li fiferal mejih. Lyb lebimalafi mim 
              cej bet cirebelebe divuca selodyr tequir peh rodal.
             
              Beb, caqu mifel, faja bihesira bem, lem cequi he limilepo, leb disah nanubalic. Tubisafi diquihaj, 
              dyde pel lame jet, dabuquoep, hemilim le, lejifove sic doebame nibemuby. Lereda pa fomalymiloe bulema 
              pefir nemobyboe, der, filabef duf roen. Led, quometoet malid bul, medenamiha, jed dalyl lif duv, ju quape 
              dahe py lypoma dul. Filedavele rifa delo, litifulali mesab moec fulup murodel fadeca daluba, ry ladim licilat.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viqu cofo bet be pafydybu ja, bela, 
              rub delil fimelamep retoem debeli, citime. Quem, to canu me ni lecabara vihamepoebu fivecelu 
              li lal syquati merynivyda mifesed berofi fefa. Fefuj femaj do, pocad hysas se di fyledoe beleb 
              bal pe. Mi, lilahe pip many mimole bipoe, pecem difoeb lanalulabe, fij jisof quyv.
              
              Led deli ma peb medo jivi lo diram bape, lify le, mequ divefim come matam. Sap fi, di miba bu 
              mele mivedi nan didemoeb no demi mam. Lib, label lel fomubufe, mob ronival, dybiril cebafe dab 
              coebi mel doeril. Rubade debilave ne babab baret si homif li fiferal mejih. Lyb lebimalafi mim 
              cej bet cirebelebe divuca selodyr tequir peh rodal.
             
              Beb, caqu mifel, faja bihesira bem, lem cequi he limilepo, leb disah nanubalic. Tubisafi diquihaj, 
              dyde pel lame jet, dabuquoep, hemilim le, lejifove sic doebame nibemuby. Lereda pa fomalymiloe bulema 
              pefir nemobyboe, der, filabef duf roen. Led, quometoet malid bul, medenamiha, jed dalyl lif duv, ju quape 
              dahe py lypoma dul. Filedavele rifa delo, litifulali mesab moec fulup murodel fadeca daluba, ry ladim licilat.
              </div>
              <div class="form-check">
                <input class="" type="checkbox"value="" id = "terms"/>
                <label class="form-check-label" for="terms">
                 I Accept the Terms and Condition.
                </label>
              </div>
            </div>
           
          <div class="col-lg bg-light m-3 p-3 " style="height: 34rem">
          <div>
            <h2 class="mb-4 ">Client's Information</h2>
            <form class="needs-validation" novalidate="">
              <div class="mb-4">
                <label for="first_name" class ="text-start">First Name</label>
                <div class="input-group">

                    <input type="text" class="form-control" id="first_name" placeholder="First Name" required="">
                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                </div>
            </div>
                <div class="mb-4">
                    <label for="username">Last Name</label>
                    <div class="input-group">

                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-4">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-4">
                    <label for="contant">Contact Number</label>
                    <input type="text" class="form-control" id="contact" placeholder="Contact Number">
                </div>

                </div>
               
               
            </form>
        
            </div>
          </div>
      </div>
      <div class="text-center p-3">
        <a type="button" class="w-25 btn btn-lg btn-primary text-center" href="#step7">Submit</a>
      </div>
  </div>
</div>

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
    <h2 class="display-5 fw-normal">Step 7 - Complete Your Payment</h1>
    
  </div>
</div>




<header class = "masthead">

<div class="p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-5 fw-normal">Step 8 - Subscription Confirmed.</h1>
    
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-between ">
      <div class="col-lg ">
        <div class="main">Congratulations on Your Subscription!</div>
        <div class="subheading">Start adding contents on your website to start e-Lawyering</div>
        <div class="heading"> LEXWEB WEBSITE BUILDER</div>
        <a class="w-100 btn btn-lg btn-primary" href="#step1">EDIT</a>
      </div>
     
      <div class="col">
      <img class="mw-100" style="margin-top:auto" src="/images/devices.png" alt="">
      </div>
  </div>
  
  </div>
</header>
@endsection