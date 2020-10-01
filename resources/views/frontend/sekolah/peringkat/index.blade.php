@extends('backend.layouts.main_layout')
@section('main-content')
<div class="container mt-5 mb-5">
  <h3 class="text-center" style="text-transform: uppercase">Peringkat Sekolah</h3>
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Nama Sekolah</th>
        <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/gold-medal.png')}}" alt="medal"
            style="width: 25px; height:25px;"></th>
        <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/silver-medal.png')}}" alt="medal"
            style="width: 25px; height:25px;"></th>
        <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/bronze-medal.png')}}" alt="medal"
            style="width: 25px; height:25px;"></th>
      </tr>
    </thead>
    <tbody>
      @for($i = 0; $i < 10; $i++) <tr>
        <th scope="row">{{$i + 1}}</th>
        <td class="text-center">SMA {{$i + 1}}</td>
        <td class="text-center">{{rand(0,10)}}</td>
        <td class="text-center">{{rand(0,10)}}</td>
        <td class="text-center">{{rand(0,10)}}</td>
        </tr>
        @endfor
    </tbody>
  </table>

  <div class="mt-5">
    <h3 class="text-center" style="text-transform: uppercase">Peringkat Peserta</h3>
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <div class="glide__slide">
            <p style="text-decoration: underline; cursor: context-menu;">Tanggal : 21-12-2012</p>
            <div class="row mt-3">
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/gold-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 1}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/silver-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 11}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/bronze-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 21}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="glide__slide">
            <p style="text-decoration: underline; cursor: context-menu;">Tanggal : 21-12-2012</p>
            <div class="row mt-3">
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/gold-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 1}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/silver-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 11}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
              <div class="col-lg-4 col-sm-12">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Nama Peserta</th>
                      <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/bronze-medal.png')}}"
                          alt="medal" style="width: 25px; height:25px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                      <th scope="row" class="text-center">{{$i + 1}}</th>
                      <td class="text-center">Bambang{{$i + 21}}</td>
                      <td class="text-center">{{rand(0,10)}}</td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="{{asset('glideJs/dist/glide.min.js')}}"></script>

<script>
  let glide = new Glide('.glide', {
    autoplay: 5000,
  });

  glide.mount();
</script>
@endsection