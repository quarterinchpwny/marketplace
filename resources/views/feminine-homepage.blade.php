<div class="container">
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
</div>

@include('feminine-layouts.feminine-navigationbar')
@include('feminine-layouts.feminine-bannerheader')
@include('feminine-layouts.feminine-services')
@include('feminine-layouts.feminine-practice')
@include('feminine-layouts.feminine-blogsection')
@include('feminine-layouts.feminine-footer')
