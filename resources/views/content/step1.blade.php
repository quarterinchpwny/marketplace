@extends('layouts.layout')
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
            <h1 class="card-title pricing-card-title">₱5,000<small class="text-muted fw-light">/mo</small></h1>
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
            <h1 class="card-title pricing-card-title">₱25,000<small class="text-muted fw-light">/mo</small></h1>
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
            <h1 class="card-title pricing-card-title">₱20,000<small class="text-muted fw-light">/mo</small></h1>
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
                <a type="button" class="w-100 btn btn-lg btn-orange" href="{{url('step2')}}">Select</a>
              </div>
          </div>
        </div>
        
      </div>
      
    </div>
  
    
  
  </main>
  </div>