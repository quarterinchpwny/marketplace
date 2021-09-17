@extends('marketplace.layout')
<div class="container " style="padding-top: 2.4rem;" id="step3">
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
      <h2 class="display-5 fw-normal"><b>Step 3</b> - Select your Website Template.</h2>
        <div class="album py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-4" >
                <div class="card mb-4 box-shadow">
                    <!---modal -->
                    <div class="modal fade" id="feminine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl	">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" >Feminine template</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img class="card-img-top p-3" style="" src="/images/female_large.png " data-holder-rendered="true">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a  href="#" data-bs-toggle="modal" data-bs-target="#feminine">
                      <div class="overlay "><h3>[View]</h3></div>
                      <img class="card-img-top p-3" style="height: 32rem; display: block;" src="/images/female.png " data-holder-rendered="true">
                    </a>
                  <div class="container">
                    <div class="d-flex  flex-column">
                      <div>
                        <h3>Feminine</h3>
                      </div>
                      <div class="p-3">
                          <a type="button" class="w-100 btn btn-orange" href="{{route('step4', ['template' => 'fem'] + \Request::all())}}">Select</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <!---modal -->
                    <div class="modal fade" id="neutral" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog 	modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Neutral template</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                            <div class="modal-body">
                              <img class="card-img-top p-3" style="" src="/images/neutral_large.jpg " data-holder-rendered="true">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a  href="#" data-bs-toggle="modal" data-bs-target="#neutral">
                      <div class="overlay "><h3>[View]</h3></div>
                      <img class="card-img-top p-3" style="height: 32rem; display: block;" src="/images/neutral.png " data-holder-rendered="true">
                    </a>          
                  <div class="container">
                    <div class="d-flex  flex-column">
                      <div>
                        <h3>Neutral</h3>
                      </div>
                      <div class="p-3">
                          <a type="button" class="w-100 btn btn-orange" href="{{route('step4', ['template' => 'neut'] + \Request::all())}}">Select</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  
                    <!---modal -->
                    <div class="modal fade" id="masculine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl	">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masculine template</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img class="card-img-top p-3" style="" src="/images/masculine_large.png " data-holder-rendered="true">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a  href="#" data-bs-toggle="modal" data-bs-target="#masculine">
                      <div class="overlay "><h3>[View]</h3></div>
                      <img class="card-img-top p-3" style="height: 32rem; display: block;" src="/images/masculine.png " data-holder-rendered="true">
                    </a>              
                  <div class="container">
                    <div class="d-flex  flex-column">
                      <div>
                        <h3>Masculine</h3>
                      </div>
                      <div class="p-3">
                        <a type="button" class="w-100 btn btn-orange" href="{{route('step4', ['template' => 'mas'] + \Request::all())}}">Select</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class = "w-25 btn btnviolet" href="{{route('step2', \Request::all())}}">Back </a>
          </div>
        </div>
    </div>
  </div>
 