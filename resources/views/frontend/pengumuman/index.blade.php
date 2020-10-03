@extends('backend.layouts.main_layout')
@section('main-content')
<!-- Blog Sidebar -->
<div class="col-12 order-lg-1 sidebar-wrapper mb-5">

  <!-- Sidebar - Categories -->
  <div class="sidebar-box blog-small-thumbnail">
    <h6 class="heading-uppercase" style="font-size: 30px">Pengumuman</h6>
  @foreach($list as $row)
    <div class="blog-post-box">
      <div class="blog-post-content">
        <div class="d-flex justify-content-between margin-bottom-10">
          <div class="d-inline-flex">
            <span class="font-small">{{$row->created_at->toFormattedDateString()}}</span>
          </div>
        </div>
        <a href="#" style="font-size: 20px; font-weight: bold">{{$row->judul_pengumuman}}</a>
        <p>{{$row->isi_pengumuman}}</p>
        <a class="text-btn button-font-2" href="#">Read More</a>
      </div>
    </div>
  @endforeach
  </div>
</div>
<!-- end Blog Sidebar -->
@endsection