<nav class="navbar navbar-expand-lg navbar-dark  ced">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navFont navbar-nav mx-auto">
        @guest
            @if (Route::has('home'))
                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
            @endif


                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Our Services') }}</a>
                </li>

                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Law Update') }}</a>
                </li>


                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Law Practices') }}</a>
                </li>

                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Everyday Law') }}</a>
                </li>

                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Blog') }}</a>
                </li>

                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link" href="#">{{ __('Profile') }}</a>
                </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atty. {{ Auth::user()->lawyer->first_name.' '.Auth::user()->lawyer->last_name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </ul>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>


