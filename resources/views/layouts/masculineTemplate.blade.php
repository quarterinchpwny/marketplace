<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LexWeb-Masculine</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;400&family=Poppins:wght@200;600&family=Roboto&display=swap" rel="stylesheet">
<!-- Header and Navbar -->
<div class="container-fluid" id="topContent">
      <a href="/Masculine">
        <img src="/images/masculineImages/rizalLogo.png" alt="Rizal Logo" id="headerLogo"></a>
    </div>
@include('layouts.nav', ['from' => 'app'])
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="{{ asset('css/masculine.css') }}" rel="stylesheet">
<!-- Scripts -->
<script >
 function showModal(){
  document.querySelector(".modal-bg").style.visibility = "visible";
  document.querySelector(".modal-bg").style.opacity = 1;
  document.querySelector("body").style.overflow = "hidden";
}
function closeModal(){
  document.querySelector(".modal-bg").style.visibility = "hidden";
  document.querySelector(".modal-bg").style.opacity = 0;
  document.querySelector("body").style.overflow = "scroll";
}
</script>
@include('layouts.signUp')
@include('layouts.services')
@include('layouts.practiceAreas')
@include('layouts.lawUpdates')
@include('layouts.everydayLaw')
@include('layouts.footer')