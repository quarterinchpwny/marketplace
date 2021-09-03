<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LexWeb</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
      <nav class="nav nav-pills flex-column">
        <a href="{{ route('admin.dashboard') }}" class="nav-link h3 my-2">
          Admin
        </a>
        @php
          $navs = [
            [
              'title' => 'Dashboard',
              'route' => route('admin.dashboard'),
            ],
            [
              'title' => 'Lawyers',
              'route' => route('admin.lawyers'),
            ],
            [
              'title' => 'Templates',
              'route' => route('admin.templates'),
            ],
          ];
        @endphp
        @foreach ($navs as $nav)
          <li class="nav-item p-2">
            <a href="{{ $nav['route'] }}" class="{{ $active === $nav['title'] ? 'active' : '' }} nav-link">
              <span class="mx-2">{{ $nav['title'] }}</span>
            </a>       
          </li>
        @endforeach
      </nav>
    </div>
    <div class="p-1 main-container active-cont">
      @include('admin-layouts.nav')
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
