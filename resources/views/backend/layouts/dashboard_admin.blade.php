@include('backend.layouts.includes.dashboard._header_dashboard')

<body class="text-left">

  <!-- ============ Compact Layout start ============= -->
  <!-- ============ Large SIdebar Layout start ============= -->


  <div class="app-admin-wrap layout-sidebar-large clearfix">
    {{-- navbar --}}
    @include('backend.layouts.includes.dashboard._navbar_dashboard')

    {{-- sidebar --}}
    @include('backend.layouts.includes.dashboard._sidebar_dashboard')

    {{-- main content --}}
    <div class="main-content-wrap sidenav-open d-flex flex-column">
      @yield('main-content')
      @include('backend.layouts.includes.dashboard._footer_dashboard')