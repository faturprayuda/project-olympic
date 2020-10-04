@extends('backend.layouts.main_layout')
@section('main-content')
{{-- table sekolah --}}
<div class="table-responsive">
  <div class="container mt-12 mb-12">
    <h3 class="text-center" style="text-transform: uppercase">Peringkat Sekolah</h3>
    <table class="table table-striped table-bordered dt-responsive nowrap" id="peringkat_sekolah" style="width:100% !important">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th class="text-center">Nama Sekolah</th>
          <th class="text-center"><img src="{{asset('storage/img/assets/gold-medal.png')}}" alt="medal"
              style="width: 25px; height:25px;"></th>
          <th class="text-center"><img src="{{asset('storage/img/assets/silver-medal.png')}}" alt="medal"
              style="width: 25px; height:25px;"></th>
          <th class="text-center"><img src="{{asset('storage/img/assets/bronze-medal.png')}}" alt="medal"
              style="width: 25px; height:25px;"></th>
        </tr>
      </thead>
    </table>
  </div>
</div>

{{-- table peserrta --}}
@if($tanggal == null)
@else
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
@endif


@endsection

@section('script')
<script src="{{asset('glideJs/dist/glide.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

<script>
  let glide = new Glide('.glide', {
    autoplay: 5000,
  });

  glide.mount();
</script>
<script>
  $('#peringkat_sekolah').DataTable({
    processing: false,
    serverSide: true,
    bInfo:false,
    // orderable:false,
    ajax:"{{route('user.peringkat.sekolah.json')}}",
    columns: [
      // { data: 'DT_Row_Index', name: 'DT_Row_Index' , orderable: false},
      { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
      { data: 'nama_sekolah', name: 'nama_sekolah', className: 'text-center'},
      { data: 'medal_emas', name: 'medal_emas', className: 'text-center'},
      { data: 'medal_perak', name: 'medal_perak', className: 'text-center'},
      { data: 'medal_perunggu', name: 'medal_perunggu', className: 'text-center'}
    ]
  });
</script>
@endsection