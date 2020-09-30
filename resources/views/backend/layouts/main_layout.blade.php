@include('backend.layouts.includes._header')

<body data-preloader="2">
  @include('backend.layouts.includes._navbar')

  @yield('main-content')

  @include('backend.layouts.includes._footer')