@extends('admin-layouts.sidebar', ['active' => 'Dashboard'])
@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </nav>
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>
@endsection