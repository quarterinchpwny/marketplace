<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4 col-offset-4">
      <div class="card">
        <div class="card-header text-center h5">{{ __('Register') }}</div>
        <div class="card-body">
          @if (session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif
          <form method="POST" action="{{ route('register') }}">
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
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-danger">
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

