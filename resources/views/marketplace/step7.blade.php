@extends('marketplace.layout')
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
    <h2 class="display-5 fw-normal"><b>Step 7</b> - Complete Your Payment</h2>  
  </div>

  <div class=" pb-md-4 mx-auto">
    <div class="container"style="margin-top:auto">
      <div class="row align-items-center justify-content-between ">
        <div class="col-lg bg-light m-3 p-3 " style="height: 34rem">
          <h2 class="mb-4" style="color: #F4512C !important">Order Summary</h2>
            <div class="table-responsive">
              <table class="table text-center" id="tables">
                <thead>
                  <tr>
                    <th style="width: 20%;">Product</th>
                    <th style="width: 20%;">Price</th>
                    <th style="width: 20%;">Quantity</th>
                    <th style="width: 20%;">Total Amount</th>
                  </tr>
                </thead>
                <tbody id="tbv">
                </tbody>
              </table>
                  <h5 class = "text-end p-2" >Total amount: <b id= "total"></b></h5>
            </div>
          </div>
          <div class="col-lg bg-light m-3 p-3 overflow-auto scrollbar scrollbar-primary" style="height: 34rem">
            <div>
              <h2 class="mb-4 ">Payment Method</h2>
            </div>
          <!--Paypal-->
          <div class="accordion accordion-flush">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-Paypal">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePaypal" aria-expanded="false" aria-controls="flush-collapsePaypal">
                  <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" />
                </button>
              </h2>
              <div id="flush-collapsePaypal" class="accordion-collapse collapse" aria-labelledby="flush-Paypal" data-bs-parent="#Paypal">
                <div class="accordion-body ">
                  <div class="col-md-8 order-md-1 overflow-hidden" style="height: 60 %;width:100%">
                    <form class="needs-validation" novalidate="">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class ="form-control"id="paypalfirstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="paypallastName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="paypaladdress" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Name on card</label>
                          <input type="text" class="form-control" id="paypalcc-name" placeholder="" required="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="cc-number">Credit card number</label>
                          <input type="text" class="form-control" id="paypalcc-number" placeholder="" required="">
                          <div class="invalid-feedback">
                            Credit card number is required
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="cc-expiration">Expiration</label>
                          <input type="text" class="form-control" id="paypalcc-expiration" placeholder="" required="">
                          <div class="invalid-feedback">
                            Expiration date required
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="paypalcc-cvv" placeholder="" required="">
                          <div class="invalid-feedback">
                            Security code required
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Dragonpay-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-Dragonpay">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDragonpay" aria-expanded="false" aria-controls="flush-collapseDragonpay">
                  <img height = "40" src="https://www.dragonpay.ph/wp-content/uploads/elementor/thumbs/mini-logo-o63g1czo8elfxzo1ljhb7gaidej6xjvh9783g91di8.png" title="mini-logo" alt="Dragonpay more ways to pay">                </button>
              </h2>
              <div id="flush-collapseDragonpay" class="accordion-collapse collapse" aria-labelledby="flush-Dragonpay" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="col-md-8 order-md-1 overflow-hidden" style="height: 60 %;width:100%">
                    <form class="needs-validation" novalidate="">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="dragonPayfirstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="dragonPaylastName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="dragonPayaddress" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Name on card</label>
                          <input type="text" class="form-control" id="dragonPaycc-name" placeholder="" required="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="cc-number">Credit card number</label>
                          <input type="text" class="form-control" id="dragonPaycc-number" placeholder="" required="">
                          <div class="invalid-feedback">
                            Credit card number is required
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="cc-expiration">Expiration</label>
                          <input type="text" class="form-control" id="dragonPaycc-expiration" placeholder="" required="">
                          <div class="invalid-feedback">
                            Expiration date required
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="dragonPaycc-cvv" placeholder="" required="">
                          <div class="invalid-feedback">
                            Security code required
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
              </div>
            </div>
            <!--Paymongo-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingPaymongo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePaymongo" aria-expanded="false" aria-controls="flush-collapsePaymongo">
                  <img src="https://assets-global.website-files.com/60411749e60be86afb89d2f0/6041194a54fc8f4dfc8730bd_Paymongo_Final_Main_Logo_2020_RGB_green_horizontal.svg" width="170" loading="lazy" alt="" class="logo-image">
                </button>
              </h2>
              <div id="flush-collapsePaymongo" class="accordion-collapse collapse" aria-labelledby="flush-headingPaymongo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="col-md-8 order-md-1 overflow-hidden" style="height: 60 %;width:100%">
                    <form class="needs-validation" novalidate="">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="paymongofirstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="paymongolastName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="paymongoaddress" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Name on card</label>
                          <input type="text" class="form-control" id="paymongocc-name" placeholder="" required="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="cc-number">Credit card number</label>
                          <input type="text" class="form-control" id="paymongocc-number" placeholder="" required="">
                          <div class="invalid-feedback">
                            Credit card number is required
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="cc-expiration">Expiration</label>
                          <input type="text" class="form-control" id="paymongocc-expiration" placeholder="" required="">
                          <div class="invalid-feedback">
                            Expiration date required
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="paymongocc-cvv" placeholder="" required="">
                          <div class="invalid-feedback">
                            Security code required
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      <div class="text-center p-3">
        <a class = "w-25 btn btn-orange" href="{{route('step6', \Request::all())}}">Back</a>
        <a type="button" class="w-25 btn btnviolet " href="{{route('step8', \Request::all())}}">Next</a>
      </div>
  </div>
</div>
<script>

    const tbodyEl = document.getElementById("tbv");
    const tableEl = document.getElementById("tables");
    var total = 0;
    for(let x=1;x<=5;x++){
     var element = localStorage.getItem("prod".concat(x));
    
    if(element!= null){
     
        tbodyEl.innerHTML += `
        <tr>
        <td><p  class = "step5p" id = 'prod`+x+`'></p></td>
        <td><p class = "step5p" >5000</p></td>
        <td><p class = "step5p"  id = 'qty`+x+`'></p></td>
        <td><p  class = "step5p" id = 'val`+x+`'></p></td>
      
        </tr>
        `;
      
        
        document.getElementById('prod'.concat(x)).innerHTML = localStorage.getItem("prod".concat(x));
        document.getElementById('qty'.concat(x)).innerHTML = localStorage.getItem("qty".concat(x));
        document.getElementById('val'.concat(x)).innerHTML = localStorage.getItem("tp".concat(x));

        total  += parseInt(localStorage.getItem("tp".concat(x)));
        document.getElementById('total').innerHTML = total;
        console.log(total);

    }
    else
      continue;

    }
    
</script>