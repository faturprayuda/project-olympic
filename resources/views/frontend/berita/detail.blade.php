@extends('backend.layouts.main_layout')
@section('main-content')
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        <h2 class="font-weight-normal">{{$list->judul_berita}}</h2>
        <ul class="list-horizontal-dash">
          <li><a href="#">by Admin</a></li>
          <li><a href="#">{{$list->created_at->toFormattedDateString()}}</a></li>
        </ul>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>

<!-- Featured Image -->
<div class="container">
  <img src="{{url('storage/gambar-berita/'.$list->gambar)}}" alt="" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;">
</div><!-- end container -->
<!-- end Featured Image -->

<!-- Post Content -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">

        <p>{{$list->isi_berita}}</p>

      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
<!-- end Post Content -->
<!-- comment content -->
<div id="disqus_thread"></div>
@endsection
@section('script')
  <script>
  /**
  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
  /*
  var disqus_config = function () {
  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
  };
  */
  (function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = 'https://bukuonline.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
    Disqus.</a></noscript>
@endsection