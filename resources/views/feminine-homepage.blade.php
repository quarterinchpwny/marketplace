<div class="container">
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
</div>

@include('feminine-layouts.bannerheader')
@include('feminine-layouts.services')
@include('feminine-layouts.practice-areas')
@include('feminine-layouts.law-updates')
