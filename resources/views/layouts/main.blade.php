<!doctype html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ url('assets') }}/"
  data-template="vertical-menu-template-starter"
>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Core head -->
  @include('layouts.partials.head', ['vendor' => isset($vendor)?$vendor:[]])
  
  <!-- head stack -->
  @stack('head')

  <title>App Name - @yield('title')</title>
</head>
<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
              <img src="{{ url('assets/img/logo.svg') }}" alt="Hypercode" style="height:50px;">
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Page -->
          <li class="menu-item {{ request()->is('customer*') ? 'active' : '' }}">
            <a href="{{ route('customer.index') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Customer">Customer</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('contact*') ? 'active' : '' }}">
            <a href="{{ route('contact.index') }}" class="menu-link">
              <i class="menu-icon tf-icons fa fa-user"></i>
              <div data-i18n="Contact">Contact</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="page-2.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Sales Invoice">Sales Invoice</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        @include('layouts.partials.navbar')

        <!-- Content wrapper -->
        <div class="content-wrapper">
          
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            
            @yield('content')

          </div><!-- /Content -->

          <div class="content-backdrop fade"></div>
        </div><!-- /Content wrapper -->
      </div><!-- /Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div><!-- /Layout wrapper -->

<!-- Core script -->  
@include('layouts.partials.script', ['vendor' => isset($vendor)?$vendor:[]])

<!-- Stackscript-->
@stack('scripts')

</body>
</html>