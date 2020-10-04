@extends('backend.layouts.main_layout')
@section('main-content')
@section('style')
<style>
  .deskripsi-berita {
    white-space: nowrap;
    width: 850px;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
@endsection
<!-- Blog section -->
<!-- Page header -->
<div class="section-sm bg-grey">
  <div class="container text-center">
    <h3 class="font-family-playfair">TRILOGI News</h3>
  </div><!-- end container -->
</div>

<div class="section">
  <div class="container">
    <!-- Blog Posts -->
    <div class="blog-small-thumbnail">
      <!-- Blog Post box 1 -->
      @foreach($list as $row)
      <div class="blog-post-box">
        <div class="blog-post-img">
          <a href="#">
            <img src="{{url('storage/gambar-berita/'.$row->gambar)}}" alt="">
          </a>
        </div>
        <div class="blog-post-content">
          <div class="d-flex justify-content-between margin-bottom-10">
            {{-- <div class="d-inline-flex">
            </div> --}}
            <div class="d-inline-flex">
              <span class="font-small">{{$row->created_at->toFormattedDateString()}}</span>
            </div>
          </div>
          <h5><a href="#">{{$row->judul_berita}}</a></h5>
          <p class="deskripsi-berita">{{$row->isi_berita}}</p>
          <a class="text-btn button-font-2" href="{{route('user.berita.show',$row->id)}}">Lihat Berita</a>
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

    <!-- end Blog Posts -->
  </div><!-- end container -->
</div>
<!-- end Blog section -->
@endsection