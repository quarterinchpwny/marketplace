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

@include('feminine-layouts.navigationbar')
@include('feminine-layouts.bannerheader')
@include('feminine-layouts.services')
@include('feminine-layouts.practice')
@include('feminine-layouts.blogsection')
@include('feminine-layouts.footer')

@endsection
