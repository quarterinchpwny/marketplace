@extends('admin-layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4 col-offset-4">
      <div class="card">
        <div class="card-header text-center h5">{{ __('Admin Login') }}</div>
        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          @if (session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif
          <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="form-group mb-3">
              <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-danger mb-3">
                {{ __('Login') }}
              </button>
              <a href="/" class="btn btn-link">Home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection