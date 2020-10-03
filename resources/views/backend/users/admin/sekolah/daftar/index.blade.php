@extends('backend.layouts.dashboard_admin')
@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <h1>Kelola</h1>
    <ul>
      <li><a href="#">Pages</a></li>
      <li>Daftar Sekolah</li>
    </ul>
  </div>
  <div class="separator-breadcrumb border-top"></div>


  <div class="row mb-4">
    <div class="col-md-12 mb-4">
      <div class="card text-left">

        <div class="card-body">
          <h4 class="card-title mb-3"><button type="button" class="btn btn-info" data-toggle="modal"
              data-target="#exampleModal"><i class="i-Add"></i> Tambah
              Sekolah</button></h4>
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Jumlah Peserta</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $sekolah => $peserta)
                <tr>
                  <td>{{$sekolah}}</td>
                  <td>{{$peserta->count()}}</td>
                  <td> 
                    @php
                     $i = 0;
                     $data = json_decode($peserta);
                    @endphp

                    @if($i < count($data) )
                    <a href="#" class="text-success mr-2 ubah" data-toggle="modal" data-target="#ubahModal" data-id="{{$data[$i]->sekolah_id}}" data-sekolah="{{$sekolah}}"  data-placement="bottom" title="Ubah">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a onClick="deleteSekolah();" class="text-danger mr-2 delete" data-toggle="tooltip" data-id="{{$data[$i]->sekolah_id}}" data-placement="bottom" title="Hapus">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
                    @php $i++; @endphp
                    @endif
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
    <!-- end of col -->

  </div>
  <!-- end of row -->



</div>

<!-- Modal Tambah Sekolah-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('daftar.sekolah.store')}}">
          @csrf
          <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" class="form-control" name="nama_sekolah[]">
          </div>
          <div class="form-group peserta">
            <label for="nama_siswa">Nama & Email Peserta</label>
            <input type="text" class="form-control" name="nama_peserta[]" placeholder="Nama Peserta" required>
            <input type="email" class="form-control" name="email_peserta[]" placeholder="Email Peserta" required>
          </div>
          <a href="javascript:void(0)" class="text-success mr-2 text-20" data-toggle="tooltip" data-placement="bottom"
              title="Tambah Siswa" id="tambah-siswa">
              <i class="nav-icon i-Add font-weight-bold"></i>
            </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Ubah Sekolah-->
<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Nama Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('daftar.sekolah.ubah')}}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="hidden" name="id" id="id-sekolahan" value="">
            <input type="text" class="form-control" id="nama_sekolahan" name="nama_sekolah" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $('#example').DataTable();
</script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

  var index = 0;

  $('#tambah-siswa').click(function () {
      index+=1;

      const tambahSiswa = '<input type="text" class="form-control" name="nama_peserta['+index+']" placeholder="Nama Peserta" required>';
      const tambahEmail = '<input type="email" class="form-control" name="email_peserta['+index+']" placeholder="Email Peserta" required>';

      $('.peserta').append(tambahSiswa+tambahEmail);
  });

  function deleteSekolah(){
    $(document).on('click','.delete', function(e){
      var id = $(this).data('id');
      var url = '{{route("daftar.sekolah.destroy",":id")}}';
      e.preventDefault();
        swal({
          title: 'Menghapus Data Sekolah Maka Akan Menghapus Semua Peserta!',
          icon: 'warning',
          button: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              method: 'DELETE',
              url: url.replace(':id',id),
              success: function(data){
                swal({
                  title : 'Data Berhasil Dihapus',
                  icon : 'success',
                });
                window.location = "{{ route('daftar.sekolah.index') }}";
              }
            });
          }
        });



    })
  }
</script>
<script>
  $(document).on('click','.ubah', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var sekolah = $(this).data('sekolah');

    document.getElementById('id-sekolahan').value = id;
    document.getElementById('nama_sekolahan').value = sekolah;

  })
</script>
@endsection