@extends('marketplace.layout')
<form method="POST" action="{{ route('register') }}">

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
      <h2 class="display-5 fw-normal text-center"><b>Step 6</b> - Review your Subscription Agreement</h1>
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
                @if (session('error'))
                  <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                  </div>
                @endif
                @csrf
                <div class="form-group mb-3">
                  <label for="first_name" class="">{{ __('First Name') }}</label>
                  <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                  @error('first_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="last_name" class="">{{ __('Last Name') }}</label>
                  <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                  @error('last_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="email" class="">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="password" class="">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
          </div>
        </div>
      </div>
        <div class="text-center p-3">
          <a class = "w-25 btn  btn-orange" href="{{route('step5', \Request::all())}}"> Back </a>
          <button type="submit"  class="w-25 btn btnviolet text-center">
            Next
          </button>
        </div>
    </div>
  </div>
</form>