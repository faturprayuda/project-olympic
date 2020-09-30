@extends('backend.layouts.main_layout')
@section('main-content')

<!-- Page header -->
<div class="section-lg bg-image parallax"
  style="background-image: url({{asset('component/assets/images/corporate-clean-bg-new.jpg')}})">
  <div class="bg-black-06">
    <div class="container text-center">
      <h1 class="font-weight-light">About Timeline</h1>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">About us</li>
        </ul>
      </nav>
    </div><!-- end container -->
  </div>
</div>
<!-- About section -->
<div class="section no-padding-bottom">
  <div class="container">
    <div class="section-title text-center">
      <h2>We Are Mono</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et magnis
        dis parturient montes, nascetur ridiculus mus.</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row gallery-wrapper spacing-10">
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/co-working-gallery-2.jpg')}}" data-gallery-title="Gallery Image 1">
            <img src="{{asset('component/assets/images/co-working-gallery-2.jpg')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/co-working-gallery-4.jpg')}}" data-gallery-title="Gallery Image 2">
            <img src="{{asset('component/assets/images/co-working-gallery-4.jpg')}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 gallery-box">
        <div class="gallery-img">
          <a href="{{asset('component/assets/images/co-working-gallery-6.jpg')}}" data-gallery-title="Gallery Image 3">
            <img src="{{asset('component/assets/images/co-working-gallery-6.jpg')}}" alt="">
          </a>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container-fluid -->
</div>
<!-- end About section -->

<!-- Contact Info section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3 icon-3xl">
        <i class="ti ti-email text-dark margin-bottom-20"></i>
        <h6 class="heading-uppercase no-margin">Email</h6>
        <p>contact@email.com</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 icon-3xl">
        <i class="ti ti-mobile text-dark margin-bottom-20"></i>
        <h6 class="heading-uppercase no-margin">Phone</h6>
        <p>+(987) 654 321 01</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 icon-3xl">
        <i class="ti ti-skype text-dark margin-bottom-20"></i>
        <h6 class="heading-uppercase no-margin">Skype</h6>
        <p>contact.skype</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 icon-3xl">
        <i class="ti ti-location-pin text-dark margin-bottom-20"></i>
        <h6 class="heading-uppercase no-margin">Address</h6>
        <p>121 King St, Melbourne VIC 3000</p>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
<!-- end Contact Info section -->

<!-- Contact Form section -->
<div class="section no-padding-top">
  <div class="container">
    <div class="contact-form">
      <form method="post" id="contactform">
        <div class="form-row">
          <div class="col-12 col-sm-6">
            <input type="text" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="col-12 col-sm-6">
            <input type="email" id="email" name="email" placeholder="E-Mail" required>
          </div>
        </div>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
        <textarea name="message" id="message" placeholder="Message"></textarea>
        <button class="button button-lg button-outline-dark-2" type="submit">Send Message</button>
      </form>
      <!-- Submit result -->
      <div class="submit-result">
        <span id="success">Thank you! Your Message has been sent.</span>
        <span id="error">Something went wrong, Please try again!</span>
      </div>
    </div><!-- end contact-form -->
  </div><!-- end container -->
</div>
<!-- end Contact Form section -->
@endsection