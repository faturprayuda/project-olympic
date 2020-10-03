@extends('backend.layouts.main_layout')
@section('main-content')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        <h2 class="font-weight-normal">Single Post Layout 2</h2>
        <ul class="list-horizontal-dash">
          <li><a href="#">by Admin</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Feb 6, 2019</a></li>
        </ul>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>

<!-- Featured Image -->
<div class="container">
  <img src="{{asset('component/assets/images/blog-single-2.jpg')}}" alt="">
</div><!-- end container -->
<!-- end Featured Image -->

<!-- Post Content -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et
          magnis dis parturient montes, nascetur ridiculus mus.</p>

        <blockquote class="blockquote blockquote-style-3 margin-top-20">
          <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
            consequat vitae, eleifend ac, enim.</p>
          <footer class="blockquote-footer">
            <h6 class="heading-uppercase">Alexander Warren</h6>
          </footer>
        </blockquote>

        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
          enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>

        <div class="margin-top-20 margin-bottom-20">
          <div class="row col-spacing-20">
            <div class="col-12 col-md-6">
              <img src="{{asset('component/assets/images/blog-minimal-post-2.jpg')}}" alt="">
            </div>
            <div class="col-12 col-md-6">
              <img src="{{asset('component/assets/images/blog-minimal-post-3.jpg')}}" alt="">
            </div>
          </div>
        </div>

        <p>You can use the mark tag to <mark>highlight</mark> text. In enim justo, rhoncus ut, imperdiet a, venenatis
          vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>

      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
<!-- end Post Content -->

<div class="section-xs border-top">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h6 class="heading-uppercase">Tags</h6>
        <ul class="list-horizontal">
          <li><a href="#">Lifestyle</a></li>
          <li><a href="#">Travel</a></li>
        </ul>
      </div>
      <div class="col-6 text-right">
        <h6 class="heading-uppercase">Share On</h6>
        <ul class="list-horizontal-unstyled">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
        </ul>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>

<!-- Comments section -->
<div class="section bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        <h4 class="font-weight-normal margin-bottom-50">Comments</h4>
        <!-- Comment box 1 -->
        <div class="comment-box">
          <div class="comment-user-avatar bg-dark">
            <i class="fa fa-user text-white"></i>
          </div>
          <div class="comment-content">
            <span class="comment-time">2 hours ago</span>
            <h6 class="font-weight-normal">John Smith</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
        <!-- Comment box 2 -->
        <div class="comment-box">
          <div class="comment-user-avatar bg-dark">
            <i class="fa fa-user text-white"></i>
          </div>
          <div class="comment-content">
            <span class="comment-time">5 hours ago</span>
            <h6 class="font-weight-normal">Alexander Warren</h6>
            <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi
              vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
          </div>
        </div>
        <!-- Comment box 3 -->
        <div class="comment-box">
          <div class="comment-user-avatar bg-dark">
            <i class="fa fa-user text-white"></i>
          </div>
          <div class="comment-content">
            <span class="comment-time">1 day ago</span>
            <h6 class="font-weight-normal">Melissa Bakos</h6>
            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
              sed ipsum.</p>
          </div>
        </div>
        <!-- end Comment box 3 -->
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
<!-- end Comments section -->

<!-- Write Comment section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        <h4 class="font-weight-normal margin-bottom-50">Write a Comment</h4>
        <form>
          <div class="form-row">
            <div class="col-12 col-sm-6">
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="col-12 col-sm-6">
              <input type="email" name="email" placeholder="E-Mail" required>
            </div>
          </div>
          <textarea name="message" placeholder="Message"></textarea>
          <button class="button button-lg button-border-1px button-outline-grey" type="submit">Post Comment</button>
        </form>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
<!-- end Write Comment section -->
</body>
@endsection