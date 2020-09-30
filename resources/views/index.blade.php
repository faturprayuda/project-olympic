@extends('backend.layouts.main_layout')
@section('main-content')
<!-- Home section -->
<div class="section-fullscreen bg-image parallax"
  style="background-image: url({{asset('component/assets/images/event-bg.jpg')}})">
  <div class="bg-black-06">
    <div class="container text-center">
      <div class="position-middle">
        <h1 class="display-4 font-weight-bold">Design Conference 2018</h1>
      </div>
    </div><!-- end container -->
  </div>
</div>
<!-- end Home section -->

<!-- About section -->
<div id="about" class="section no-padding-bottom">
  <div class="container">
    <div class="section-title text-center">
      <h2>What's About Event</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row gallery-wrapper spacing-10">
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/event-gallery-1.jpg')}}" data-gallery-title="Gallery Image 1">
            <img src="{{asset('component/assets/images/event-gallery-1.jpg')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/event-gallery-2.jpg')}}" data-gallery-title="Gallery Image 2">
            <img src="{{asset('component/assets/images/event-gallery-2.jpg')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/event-gallery-3.jpg')}}" data-gallery-title="Gallery Image 3">
            <img src="{{asset('component/assets/images/event-gallery-3.jpg')}}" alt="">
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
    <div class="timeline-wrapper">
      <!-- Timeline box 1 -->
      <div class="timeline">
        <div class="timeline-date">
          <h6 class="heading-uppercase">8:00 - 8:30</h6>
        </div>
        <div class="timeline-content">
          <h6 class="font-weight-normal">Registration</h6>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          </p>
        </div>
      </div>
      <!-- Timeline box 1 -->
      <div class="timeline">
        <div class="timeline-date">
          <h6 class="heading-uppercase">8:30 - 9:00</h6>
        </div>
        <div class="timeline-content">
          <h6 class="font-weight-normal">Opening Cerenomy</h6>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          </p>
        </div>
      </div>
      <!-- Timeline box 1 -->
      <div class="timeline">
        <div class="timeline-date">
          <h6 class="heading-uppercase">9:00 - 10:30</h6>
        </div>
        <div class="timeline-content">
          <h6 class="font-weight-normal">The Evolution of Design</h6>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          </p>
        </div>
      </div>
      <!-- Timeline box 1 -->
      <div class="timeline">
        <div class="timeline-date">
          <h6 class="heading-uppercase">10:30 - 13:00</h6>
        </div>
        <div class="timeline-content">
          <h6 class="font-weight-normal">Future of Design</h6>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          </p>
        </div>
      </div>
      <!-- Timeline box 1 -->
      <div class="timeline">
        <div class="timeline-date">
          <h6 class="heading-uppercase">13:00 - 13:20</h6>
        </div>
        <div class="timeline-content">
          <h6 class="font-weight-normal">Closing Cerenomy</h6>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          </p>
        </div>
      </div>
    </div><!-- end timeline-wrapper -->
  </div><!-- end container -->
</div>
<!-- end Event Schedule section -->

<!-- Play video section -->
<div class="section-lg bg-image parallax"
  style="background-image: url({{asset('component/assets/images/event-parallax.jpg')}})">
  <div class="bg-black-06">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <h1 class="font-weight-thin">Youtube &amp; Vimeo Lightbox Video Player</h1>
          <a class="button-circle button-circle-xl button-circle-outline-white-2 margin-top-20 popup-youtube"
            data-youtube-src="https://www.youtube.com/embed/1aux_hLPf4c?autoplay=1&rel=0" href="#"><i
              class="fa fa-play"></i></a>
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </div>
</div>
<!-- end Play video section -->

<!-- Team section -->
<div class="section">
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
</div>
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
        <a href="#"><img src="{{asset('component/assets/images/client-1-white.png')}}" alt=""></a>
      </div>
      <div class="client-box">
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
        <a href="#"><img src="{{asset('component/assets/images/client-7-white.png')}}" alt=""></a>
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