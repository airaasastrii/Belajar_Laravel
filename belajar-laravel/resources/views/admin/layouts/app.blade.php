<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title ?? 'Dashboard Admin PPKD Sticker'}}</title>

  <!-- SEO Optimization -->
  <meta name="description" content="Blank Page - Spark Admin Premium Bootstrap 5 Admin Dashboard Template">
  <meta name="author" content="Spark Admin Team">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- Local Third-Party Libraries (100% Offline Compatible) -->
  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

  <!-- Main Design System & Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

  <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green navigation
         ========================================== -->
    @include('admin.layouts.inc.sidebar')
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->


  <!-- ==========================================
         START: Main Content Area
         ========================================== -->
  <div class="main-wrapper">

    <!-- START: Top Navbar Component -->
   @include('admin.layouts.inc.header')
    <!-- END: Top Navbar Component -->

    <!-- START: Page Header Banner -->
    <div class="page-header">
      <div>
        <h1 class="page-title">@yield('title')</h1>
        <p class="page-subtitle">@yield('subtitle')</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-muted-green">Home</a></li>
          <li class="breadcrumb-item active text-main" aria-current="page">Blank Page</li>
        </ol>
      </nav>
    </div>
    <!-- END: Page Header Banner -->

    <!-- START: Blank Page Content Area -->
    <div class="card p-4 border-light shadow-sm">
        @yield('content')
    </div>
    <!-- END: Blank Page Content Area -->


    <!-- START: Footer Component -->
    <footer class="footer-custom">
      <div class="footer-left">
        <span class="footer-logo">
          <i class="bi bi-asterisk"></i> Spark Admin
        </span>
        <span class="footer-separator">|</span>
        <span class="footer-copy">&copy; 2026 Made with <i class="bi bi-heart-fill text-danger footer-heart"></i> by<a
            href="https://sparkadminpro.gumroad.com/" target="_blank">Spark Admin</a>• Distributed by <a
            href="https://www.themewagon.com/" target="_blank">ThemeWagon</a> </span>
      </div>
      <div class="footer-right">
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Overview</a></li>
          <li><a href="#" class="footer-link">Statistics</a></li>
          <li><a href="#" class="footer-link">Help & Documentation</a></li>
          <li><a href="#" class="footer-link">Status <span class="status-dot"></span></a></li>
        </ul>
      </div>
    </footer>
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Local Third-Party Libraries Script dependencies -->
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

  <!-- Local dashboard interactions controller -->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
