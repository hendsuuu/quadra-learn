<!DOCTYPE html>
<html lang="id" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="front-pages">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>QuadraLearn</title>


    <meta name="description" content="Media Pembelajaran Interaktif Berbasis Web pada Materi Fungsi Kuadrat Kelas X dengan Metode Tutorial" />
    <meta name="keywords" content="quadralearn, fungsi kuadrat, media pembelajaran interaktif, 404 Not Found Indonesia">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('quadra_learn.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" class="template-customizer-core-css" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" class="template-customizer-theme-css" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/front-config.js') }}"></script>

</head>

<body>

<script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
<script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
      <!-- Menu logo wrapper: Start -->
      <div class="navbar-brand app-brand demo d-flex py-0 me-4">
        <!-- Mobile menu toggle: Start-->
        <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
        </button>
        <!-- Mobile menu toggle: End-->
        <a href="#landingHero" class="app-brand-link">
          <span class="app-brand-logo demo">
            <img src="{{ asset('quadra_learn.png') }}" alt="404 Not Found Indonesia" width="30" style="border-radius: 150px" srcset="">
          </span>
          <span class="app-brand-text menu-text fw-bold ms-2 ps-1">QuadraLearn</span>
        </a>
      </div>
      <!-- Menu logo wrapper: End -->
      
      <!-- Menu wrapper: Start -->
      <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
        <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="tf-icons bx bx-x bx-sm"></i>
        </button>
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="kompetensiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kompetensi
            </a>
            <ul class="dropdown-menu" aria-labelledby="kompetensiDropdown">
              <li><a class="dropdown-item" href="#">Indikator Capaian</a></li>
              <li><a class="dropdown-item" href="tujuan-pembelajaran">Tujuan Pembelajaran</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="kompetensiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="#">Petunjuk Aplikasi</a></li>
              <li><a class="dropdown-item" href="#">Daftar Pustaka</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <!-- Menu wrapper: End -->
      
      <!-- Toolbar: Start -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- navbar button: Start -->
        <li>
          <a href="{{ route('login') }}" class="btn btn-primary">
            <span class="tf-icons bx bx-user me-md-1"></span>
            @guest
              <span class="d-none d-md-block">Masuk</span>
            @else
              <span class="d-none d-md-block">{{ auth()->user()->name }}</span>
            @endguest
          </a>
        </li>
        <!-- navbar button: End -->
      </ul>
      <!-- Toolbar: End -->
    </div>
  </div>
</nav>
<!-- Navbar: End -->


<!-- Sections:Start -->


<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
      <div class="container">
        <div class="hero-text-box text-center">
          <h1 class="text-primary hero-title display-4 fw-bold">Belajar fungsi kuadrat dengan cermat</h1>
          <h2 class="hero-sub-title h6 mb-4 pb-1">
            Media Pembelajaran Interaktif Berbasis Web <br class="d-none d-lg-block" /> Pada Materi Fungsi Kuadrat Kelas X Dengan Metode Tutorial
          </h2>
          <div class="landing-hero-btn d-inline-block position-relative">
            
            <a href="{{url('dashboard')}}" class="btn btn-primary">Mulai belajar!</a>
          </div>
        </div>
      
      
      </div>
    </div>
  </section>  
</div>

<!-- @yield('content') -->
  
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script> 


  <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  
  <script src="{{ asset('assets/js/front-main.js') }}"></script> 


  <!-- Page JS -->
  
  <script src="{{ asset('assets/js/front-page-landing.js') }}"></script> 
  <script>
       function checkHash() {
        if (window.location.hash === '#tujuan-pembelajaran') {
            document.getElementById('tujuaan-pembelajaran-component').style.display = 'block';
            console.log('tujuan pembelajaran');
            
        } else {
            document.getElementById('tujuaan-pembelajaran-component').style.display = 'none';
        }
    }

    // Check the URL when the page loads
    window.onload = checkHash;

    // Also handle hash changes dynamically without a page reload
    window.onhashchange = checkHash;
    </script>
  
</body>

</html>
