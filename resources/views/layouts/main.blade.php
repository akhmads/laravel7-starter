<!doctype html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ url('/assets/') }}"
  data-template="vertical-menu-template-starter"
>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @include('layouts.partials.head')

  <title>App Name - @yield('title')</title>
</head>
<body>

  @section('navbar')
  @show

</body>
</html>