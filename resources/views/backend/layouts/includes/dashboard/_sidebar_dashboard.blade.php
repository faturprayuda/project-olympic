<div class="side-content-wrap">
  <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
    <ul class="navigation-left">
      <li class="nav-item " data-item="dashboard">
        <a class="nav-item-hold" href="#">
          <i class="nav-icon i-Home1"></i>
          <span class="nav-text">Dashboard</span>
        </a>
        <div class="triangle"></div>
      </li>
      <li class="nav-item " data-item="news">
        <a class="nav-item-hold" href="#">
          <i class="nav-icon i-Newspaper"></i>
          <span class="nav-text">Kelola Pemberitahuan</span>
        </a>
        <div class="triangle"></div>
      </li>
      <li class="nav-item " data-item="school">
        <a class="nav-item-hold" href="#">
          <i class="nav-icon i-Building"></i>
          <span class="nav-text">Kelola Sekolah</span>
        </a>
        <div class="triangle"></div>
      </li>
    </ul>
  </div>

  <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
    <!-- Submenu Dashboards -->
    <ul class="childNav" data-parent="dashboard">
      <li class="nav-item ">
        <a class="" href="{{route('admin.index')}}">
          <i class="nav-icon i-Administrator"></i>
          <span class="item-name">Beranda Admin</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="" href="{{route("index.home")}}">
          <i class="nav-icon i-Home-2"></i>
          <span class="item-name">Beranda</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="" href="{{route('berita.index')}}">
          <i class="nav-icon i-Newspaper-2"></i>
          <span class="item-name">Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('user.pengumuman.index')}}" class="">
          <i class="nav-icon i-Communication-Tower-2"></i>
          <span class="item-name">Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="" href="{{route('user.daftar.sekolah.index')}}">
          <i class="nav-icon i-Building"></i>
          <span class="item-name">Daftar Sekolah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="" href="{{route('user.peringkat.sekolah.index')}}">
          <i class="nav-icon i-Bar-Chart-2"></i>
          <span class="item-name">Peringkat</span>
        </a>
      </li>
    </ul>
    <ul class="childNav" data-parent="news">
      <li class="nav-item ">
        <a class="" href="{{route('berita.index')}}">
          <i class="nav-icon i-Newspaper-2"></i>
          <span class="item-name">Kelola Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('pengumuman.index')}}" class="">
          <i class="nav-icon i-Communication-Tower-2"></i>
          <span class="item-name">Kelola Pengumuman</span>
        </a>
      </li>
    </ul>
    <ul class="childNav" data-parent="school">
      <li class="nav-item">
        <a class="" href="{{route('daftar.sekolah.index')}}">
          <i class="nav-icon i-Building"></i>
          <span class="item-name">Kelola Daftar Sekolah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="" href="{{route('peringkat.index')}}">
          <i class="nav-icon i-Bar-Chart-2"></i>
          <span class="item-name">kelola Peringkat Sekolah</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="" href="{{route('peserta.index')}}">
          <i class="nav-icon i-Bar-Chart-2"></i>
          <span class="item-name">Lihat Peserta</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidebar-overlay"></div>
</div>