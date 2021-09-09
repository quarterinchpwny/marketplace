<div class="container">
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
</div>

@include('feminine-layouts.navigationbar')
@include('feminine-layouts.bannerheader')
@include('feminine-layouts.services')
@include('feminine-layouts.practices')
@include('feminine-layouts.law-updates')
@include('feminine-layouts.footer')
