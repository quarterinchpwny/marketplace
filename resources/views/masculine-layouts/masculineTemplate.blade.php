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
      <a href="/home">
        <img src="/images/masculineImages/rizalLogo.png" alt="Rizal Logo" id="headerLogo"></a>
    </div>
@include('masculine-layouts.navMasculine', ['from' => 'app'])
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="{{ mix('css/masculine.css') }}" rel="stylesheet">

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
@include('masculine-layouts.signUpM')
@include('masculine-layouts.servicesM')
@include('masculine-layouts.practiceAreasM')
@include('masculine-layouts.lawUpdatesM')
@include('masculine-layouts.everydayLawM')
@include('masculine-layouts.footerM')
