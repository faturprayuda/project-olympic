<header>
  <nav class="navbar navbar-sticky navbar-transparent">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        @include('backend.layouts.includes._img_logo')
      </a>
      <ul class="nav">
        <!-- dropdown link 1 -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('index.home')}}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.berita.index')}}">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.pengumuman.index')}}">Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.daftar.sekolah.index')}}">Daftar Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.peringkat.sekolah.index')}}">Peringkat Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about.index')}}">Tentang Kami</a>
        </li>
      </ul><!-- end nav -->
      <!-- Nav Toggle button -->
      <button class="nav-toggle-btn">
        <span class="lines"></span>
      </button>
    </div><!-- end container -->
  </nav>
</header>

{{-- @section('script')
<script>
  $(document).ready(function(){
      // transition effect for navbar
      $(window).scroll(function() {
        // checkif window is scrolled more than 500px, adds/removes solid class
        if($(this).scrollTop() > 500) {
          $('.navbar').addClass('solid');
        }
        else{
          $('.navbar').removeClass('solid');
        }
      });
    });
</script>
@endsection --}}