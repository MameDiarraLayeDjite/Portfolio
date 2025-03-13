@php
    $generalSetting = \App\Models\GeneralSetting::first();
    $seoSetting = \App\Models\SeoSetting::first();
@endphp
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ajoutez ces liens dans votre head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>Portfolio | @yield('title')</title>
  <!-- Include CSS Stylesheet -->
  @include('frontend.layouts.inc.style')
</head>

<body>
  <div class="preloader">
    <img src="{{ asset('frontend/assets') }}/images/preloader.gif" alt="">
  </div>

  <!-- include Navbar -->
@if(Request::is('/'))
<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{$generalSetting && $generalSetting->logo ? asset($generalSetting->logo) : asset('img/MDLD.PNG')}}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="far fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home-page">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-page">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio-page">Portefeuille <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="/portfolio">Tout le portefeuille</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills-page">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog-page">Blog <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="{{route('blog')}}">Tous les blogs</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-page">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@else
@include('frontend.layouts.inc.navbar')
@endif





  <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

    @yield('content')

    <!-- Include Footer -->
   @include('frontend.layouts.inc.footer')
  </div>

  <!-- Include JS script -->
  @include('frontend.layouts.inc.script')

  
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
