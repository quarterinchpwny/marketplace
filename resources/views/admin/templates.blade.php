@extends('admin-layouts.sidebar', ['active' => 'Templates'])
@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Templates</li>
    </ol>
  </nav>
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>
@endsection