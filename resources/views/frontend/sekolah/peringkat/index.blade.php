@extends('backend.layouts.main_layout')
@section('main-content')
{{-- table sekolah --}}
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
      @foreach ($peringkat_sekolah as $item)
      <th scope="row">{{$loop->iteration}}</th>
      <td class="text-center">{{$item->nama_sekolah}}</td>
      <td class="text-center">{{$item->total_emas}}</td>
      @foreach($peringkat_sekolah_perak as $key => $value)
      <td class="text-center">{{$value->total_perak}}</td>
      @endforeach
      @foreach($peringkat_sekolah_perunggu as $key => $value)
      <td class="text-center">{{$value->total_perunggu}}</td>
      @endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- table peserrta --}}
<div class="mt-5 ml-3 mr-3">
  <h3 class="text-center" style="text-transform: uppercase">Peringkat Peserta</h3>
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        @foreach($tanggal as $key => $data)

        <div class="glide__slide">
          <p style="text-decoration: underline; cursor: context-menu;">Tanggal : {{$data->tanggal}}</p>
          <div class="row mt-3">
            <div class="col-lg-4 col-sm-12">
              <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Nama Sekolah</th>
                    <th scope="col" class="text-center">Nama Peserta</th>
                    <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/gold-medal.png')}}"
                        alt="medal" style="width: 25px; height:25px;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($medal_emas as $item)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td class="text-center">{{$item->nama_sekolah}}</td>
                    <td class="text-center" colspan="2">{{$item->nama_peserta}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-lg-4 col-sm-12">
              <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Nama Sekolah</th>
                    <th scope="col" class="text-center">Nama Peserta</th>
                    <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/silver-medal.png')}}"
                        alt="medal" style="width: 25px; height:25px;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($medal_perak as $item)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td class="text-center">{{$item->nama_sekolah}}</td>
                    <td class="text-center" colspan="2">{{$item->nama_peserta}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-lg-4 col-sm-12">
              <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Nama Sekolah</th>
                    <th scope="col" class="text-center">Nama Peserta</th>
                    <th scope="col" class="text-center"><img src="{{asset('storage/img/assets/bronze-medal.png')}}"
                        alt="medal" style="width: 25px; height:25px;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($medal_perunggu as $item)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td class="text-center">{{$item->nama_sekolah}}</td>
                    <td class="text-center" colspan="2">{{$item->nama_peserta}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endforeach
      </ul>
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