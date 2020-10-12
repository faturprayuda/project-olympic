@extends('backend.layouts.main_layout')
@section('main-content')
<!-- Home section -->
<div class="section-fullscreen bg-image parallax"
  style="background-image: url({{asset('component/assets/images/283.jpg')}})">
  <div class="bg-black-06">
    <div class="container text-center">
      <div class="position-middle">
        <h1 class="display-4 font-weight-bold text-center"
          style="text-align: justify; word-wrap: break-word; width: 550px;">Selamat
          Datang di Trilogi
          Olimpiade</h1>
      </div>
    </div><!-- end container -->
  </div>
</div>
<!-- end Home section -->

<!-- About section -->
<div id="about" class="section no-padding-bottom">
  <div class="container">
    <div class="section-title text-center">
      <h2>Tentang Event</h2>
      <p style="text-transform: capitalize">Trilogi Olimpiade merupakan acara yang diadakan oleh teknik informatika universitas trilogi yang bekerja sama dengan bisa.ai. acara ini ditunjukan untuk pelajar sma/smk yang memiliki ketertarikan dalam bidang teknolgi, khususnya informatika. rangkaian acara terdiri dari seminar teknologi seminggu sekali selama 5 minggu, setiap minggunya diadakan juga quiz yang hasilnya akan di akumulasi untuk pembagian hadiah pada akhir acara</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row gallery-wrapper spacing-10">
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/testi4.JPG')}}" data-gallery-title="Gallery Image 1">
            <img src="{{asset('component/assets/images/testi4.JPG')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/testi3.JPG')}}" data-gallery-title="Gallery Image 2">
            <img src="{{asset('component/assets/images/testi3.JPG')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/testi1.JPG')}}" data-gallery-title="Gallery Image 3">
            <img src="{{asset('component/assets/images/testi1.JPG')}}" alt="">
          </a>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container-fluid -->
</div>
<!-- end About section -->

<!-- Event Schedule section -->
<div class="section">
    <div class="container">
    <div class="section-title text-center">
      <h2>Berita Terbaru</h2>
      <hr>
      <div class="owl-carousel" data-owl-dots="false" data-owl-margin="30" data-owl-autoplay="true" data-owl-xs="1"
      data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="6">
      @foreach($list as $row)
      <div class="client-box">
        <a href="{{route('user.berita.show',$row->id)}}"><img src="{{url('storage/gambar-berita/'.$row->gambar)}}" alt=""></a>
        <h5><a href="{{route('user.berita.show',$row->id)}}">{{$row->judul_berita}}</a></h5>
      </div>
      @endforeach
    </div>
    </div>
  </div>
</div>
<!-- end Event Schedule section -->

<!-- Play video section -->
<!-- <div class="section-lg bg-image parallax"
  style="background-image: url({{asset('component/assets/images/event-parallax.jpg')}})">
  <div class="container">
    <div class="section-title text-center">
      <h2>Tentang Event</h2>
      <p style="text-transform: capitalize">Trilogi Olimpiade merupakan event untuk para siswa SMA/SMK yang berminat
        dalam meningkatkan kemampuan dalam bidang teknologi khususnya bagian informatika yang akan dilakukan dalam
        sebuah quiz yang diadakan setelah seminar yang diadakan di trilogi olimpiade .</p>
    </div>
  </div>
</div> -->
<!-- end Play video section -->

<!-- Team section -->
{{-- <div class="section">
  <div class="container">
    <div class="section-title text-center">
      <h2>Event Speakers</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis
        parturient montes, nascetur ridiculus mus.</p>
    </div>
    <div class="row team-wrapper">
      <!-- Team box 1 -->
      <div class="col-12 col-md-3 team-box-circle">
        <div class="team-img team-img-lg">
          <img src="{{asset('component/assets/images/team-1.jpg')}}" alt="">
<div>
  <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
  </ul>
</div>
</div>
<h6 class="font-weight-normal no-margin">Robert Vincent</h6>
<span>Entrepreneur</span>
</div>
<!-- Team box 2 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-2.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Brenda Johnson</h6>
  <span>Entrepreneur</span>
</div>
<!-- Team box 3 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-3.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Rodney Scott</h6>
  <span>Web Developer</span>
</div>
<!-- Team box 4 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-4.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Michelle White</h6>
  <span>Graphic Designer</span>
</div>
<!-- Team box 5 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-5.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Alice Trumbo</h6>
  <span>Marketer</span>
</div>
<!-- Team box 6 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-6.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Thomas Willis</h6>
  <span>Web Designer</span>
</div>
<!-- Team box 7 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-7.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Mary Anderson</h6>
  <span>Web Developer</span>
</div>
<!-- Team box 8 -->
<div class="col-12 col-md-3 team-box-circle">
  <div class="team-img team-img-lg">
    <img src="{{asset('component/assets/images/team-8.jpg')}}" alt="">
    <div>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </div>
  </div>
  <h6 class="font-weight-normal no-margin">Ernest Hermen</h6>
  <span>Photographer</span>
</div>
</div><!-- end row -->
</div><!-- end container -->
</div> --}}
<!-- end Team section -->

<!-- Clients section -->
<div class="section bg-dark-lightest">
  <div class="container">
    <div class="section-title text-center">
      <h2 class="font-weight-light no-margin">Event Sponsors</h2>
    </div>
    <div class="owl-carousel" data-owl-dots="false" data-owl-margin="30" data-owl-autoplay="true" data-owl-xs="1"
      data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="6">
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/download.png')}}" alt=""></a>
      </div>
      <!-- <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-2-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-3-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-4-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-5-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-6-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
        <a href="#"><img src="{{asset('component/assets/images/client-7-white.png')}}" alt=""></a> -->
      </div>
    </div><!-- end owl-carousel -->
  </div><!-- end container -->
</div>
<!-- end Clients section -->

<!-- Google Maps -->
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe id="gmap_canvas"
      src="https://maps.google.com/maps?q=Universitas%20Trilogi%20jakarta%20selatan&t=&z=17&ie=UTF8&iwloc=&output=embed"
      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <a href="https://www.whatismyip-address.com/nordvpn-coupon/"></a>
  </div>
  <style>
    iframe#gmap_canvas {
      width: 1500px;
      height: 500px;
    }

    .mapouter {
      position: relative;
      text-align: right;
      height: 500px;
      width: 1500px;
    }

    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      height: 500px;
      width: 1500px;
    }

    @media(max-width: 800px) {
      iframe#gmap_canvas {
        width: 700px;
        height: 500px;
      }

      .mapouter {
        position: relative;
        text-align: right;
        height: 500px;
        width: 700px;
      }

      .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 700px;
      }
    }
  </style>
</div>
<!-- end Google Maps -->
@endsection