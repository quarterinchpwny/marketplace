@extends('admin-layouts.sidebar', ['active' => 'Lawyers'])
@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Lawyers</li>
    </ol>
  </nav>
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->lawyer->first_name }}</td>
        <td>{{ $user->lawyer->last_name }}</td>
        <td>{{ $user->status }}</td>
        <td></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $users->links() }}
</div>
@endsection