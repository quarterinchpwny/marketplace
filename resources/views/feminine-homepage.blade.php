<div class="container">
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
</div>

@include('feminine-layouts.feminine-blogsection')
@include('feminine-layouts.feminine-footer')
