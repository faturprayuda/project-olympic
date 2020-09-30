@extends('backend.layouts.main_layout')
@section('main-content')

<!-- Blog section -->
<!-- Page header -->
<div class="section-sm bg-grey">
  <div class="container text-center">
    <h3 class="font-family-playfair">mono blog.</h3>
  </div><!-- end container -->
</div>

<div class="section">
  <div class="container">
    <!-- Blog Posts -->
    <div class="blog-small-thumbnail">
      <!-- Blog Post box 1 -->
      <div class="blog-post-box">
        <div class="blog-post-img">
          <a href="#">
            <img src="{{asset('component/assets/images/blog-minimal-post-1.jpg')}}" alt="">
          </a>
        </div>
        <div class="blog-post-content">
          <div class="d-flex justify-content-between margin-bottom-10">
            <div class="d-inline-flex">
              <a class="heading-uppercase" href="#">Lifestyle</a>
            </div>
            <div class="d-inline-flex">
              <span class="font-small">Jan 24, 2019</span>
            </div>
          </div>
          <h5><a href="#">Benefits of Minimalism</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <a class="text-btn button-font-2" href="#">Read More</a>
        </div>
      </div>
      <!-- Blog Post box 2 -->
      <div class="blog-post-box">
        <div class="blog-post-img">
          <a href="#">
            <img src="{{asset('component/assets/images/blog-minimal-post-2.jpg')}}" alt="">
          </a>
        </div>
        <div class="blog-post-content">
          <div class="d-flex justify-content-between margin-bottom-10">
            <div class="d-inline-flex">
              <a class="heading-uppercase" href="#">Knowledge</a>
            </div>
            <div class="d-inline-flex">
              <span class="font-small">Jan 24, 2019</span>
            </div>
          </div>
          <h5><a href="#">10 Books that I will recommend</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <a class="text-btn button-font-2" href="#">Read More</a>
        </div>
      </div>
      <!-- Blog Post box 3 -->
      <div class="blog-post-box">
        <div class="blog-post-img">
          <a href="#">
            <img src="{{asset('component/assets/images/blog-minimal-post-3.jpg')}}" alt="">
          </a>
        </div>
        <div class="blog-post-content">
          <div class="d-flex justify-content-between margin-bottom-10">
            <div class="d-inline-flex">
              <a class="heading-uppercase" href="#">Health</a>
            </div>
            <div class="d-inline-flex">
              <span class="font-small">Jan 24, 2019</span>
            </div>
          </div>
          <h5><a href="#">Benefits of House Plants</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <a class="text-btn button-font-2" href="#">Read More</a>
        </div>
      </div>
      <!-- Blog Post box 4 -->
      <div class="blog-post-box">
        <div class="blog-post-img">
          <a href="#">
            <img src="{{asset('component/assets/images/blog-classic-post-1.jpg')}}" alt="">
          </a>
        </div>
        <div class="blog-post-content">
          <div class="d-flex justify-content-between margin-bottom-10">
            <div class="d-inline-flex">
              <a class="heading-uppercase" href="#">Art</a>
            </div>
            <div class="d-inline-flex">
              <span class="font-small">Jan 24, 2019</span>
            </div>
          </div>
          <h5><a href="#">Amazing Street Arts</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <a class="text-btn button-font-2" href="#">Read More</a>
        </div>
      </div>
      <!-- Pagination -->
      <nav>
        <ul class="pagination justify-content-center margin-top-70">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </nav>
    </div>
    <!-- end Blog Posts -->
  </div><!-- end container -->
</div>
<!-- end Blog section -->
@endsection