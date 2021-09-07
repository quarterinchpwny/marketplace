@extends('layouts.sidebar')
@section('content')

<div class="container">
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

  <h1>Dashboard</h1>
  <p>This page is located in resources/views/dashboard.php</p>

  @include('layouts.references')
</div>

@include('feminine-layouts.feminine-navigationbar')
@include('feminine-layouts.feminine-bannerheader')
@include('feminine-layouts.feminine-services')
@include('feminine-layouts.feminine-practice')
@include('feminine-layouts.feminine-blogsection')
@include('feminine-layouts.feminine-footer')

@endsection
