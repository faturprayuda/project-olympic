@extends('backend.layouts.dashboard_admin')
@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <h1>Kelola</h1>
    <ul>
      <li><a href="#">Pages</a></li>
      <li>Daftar Peserta</li>
    </ul>
  </div>
  <div class="separator-breadcrumb border-top"></div>


  <div class="row mb-4">
    <div class="col-md-12 mb-4">
      <div class="card text-left">

        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Nama Peserta</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $row)
                <tr>
                  <td>{{$row->nama_sekolah}}</td>
                  <td>{{$row->nama_peserta}}</td>
                  <td> 
                    <a onClick="deletePeserta();" class="text-danger mr-2 delete" data-toggle="tooltip" data-id="{{$row->id_peserta}}" data-placement="bottom" title="Hapus">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
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
  function deletePeserta(){
    $(document).on('click','.delete', function(e){
      var id = $(this).data('id');
      var url = '{{route("peserta.destroy",":id")}}';
      e.preventDefault();
        swal({
          title: 'Hapus Peserta?',
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
                window.location = "{{ route('peserta.index') }}";
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