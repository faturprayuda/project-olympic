@extends('backend.layouts.main_layout')
@section('main-content')
@section('style')
<style>
  .read-more-show {
    cursor: pointer;
  }

  .read-more-hide {
    cursor: pointer;
  }

  .hide_content {
    display: none;
  }

  .read-more-content {
    transition: 1s ease;
  }
</style>
@endsection
<!-- Blog Sidebar -->
<div class="col-12 order-lg-1 sidebar-wrapper mb-5">

  <!-- Sidebar - Categories -->
  <div class="sidebar-box blog-small-thumbnail">
    <h6 class="heading-uppercase" style="font-size: 30px; text-decoration: underline">Pengumuman</h6>
    @foreach($list as $row)
    <div class="blog-post-box">
      <div class="blog-post-content">
        <div class="d-flex justify-content-between margin-bottom-10">
          <div class="d-inline-flex">
            <span class="font-small">{{$row->created_at->toFormattedDateString()}}</span>
          </div>
        </div>
        <a href="#" style="font-size: 20px; font-weight: bold">{{$row->judul_pengumuman}}</a>
        @if(strlen($row->isi_pengumuman) > 200)
        <p>{{substr($row->isi_pengumuman,0,200)}}<span class="titik-{{$row->id}}">......</span>
          <span class="read-more-content-{{$row->id}} hide_content">{{substr($row->isi_pengumuman,200)}}</span></p>
        <a class="text-btn button-font-2 read-more-show" href="#" data-idshow="{{$row->id}}">Baca Lebih Lanjut</a>
        <a class="text-btn button-font-2 read-more-hide hide_content" href="#" data-idhide="{{$row->id}}">Baca Lebih
          Sedikit</a>
        @else
        <p>{{$row->isi_pengumuman}}</p>
        @endif
      </div>
    </div>
    @endforeach
    <!-- Pagination -->
    <nav>
      <ul class="pagination justify-content-center margin-top-70">
        {{ $list->links() }}
      </ul>
    </nav>
  </div>
</div>
<!-- end Blog Sidebar -->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
  $('.read-more-show').removeClass('hide_content');
            $('.read-more-hide').addClass('hide_content');

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next(idHide).removeClass('hide_content');
              var idHide = $(this).data('idshow');
              $(`.read-more-content-${idHide}`).removeClass('hide_content');
              $(`.titik-${idHide}`).addClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              $(this).addClass('hide_content');
              var idShow = $(this).data('idhide');
              $(`.read-more-content-${idShow}`).addClass('hide_content');
              $(`.titik-${idShow}`).removeClass('hide_content');
              $(this).prev(idShow).removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
@endsection