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
      <ul class="nav flex-column text-white w-100">
        <a href="{{ route('home') }}" class="nav-link h3 my-2">
          LEXWEB
        </a>
        <li>
          <a href="{{ route('dashboard') }}" class="nav-link h6 my-2">
            <span class="mx-2">{{ __('Dashboard') }}</span>
          </a>       
        </li>
        <li>
          <a href="{{ route('account') }}" class="nav-link h6 my-2">
            <span class="mx-2">{{ __('Account') }}</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="p-1 my-container active-cont">
      @include('layouts.nav', ['from' => 'sidebar'])
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
