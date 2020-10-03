@extends('backend.layouts.dashboard_admin')
@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <h1>Kelola</h1>
    <ul>
      <li><a href="#">Pages</a></li>
      <li>Daftar Pengemuman</li>
    </ul>
  </div>
  <div class="separator-breadcrumb border-top"></div>


  <div class="row mb-4">
    <div class="col-md-12 mb-4">
      <div class="card text-left">

        <div class="card-body">
          <h4 class="card-title mb-3"><button type="button" class="btn btn-info" data-toggle="modal"
              data-target="#exampleModal"><i class="i-Add"></i> Tambah
              Pengumuman</button></h4>
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Judul Pengumuman</th>
                  <th class="none">Isi Pengumuman</th>
                  <th>Tanggal Posting</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $row)
                <tr>
                  <td>{{$row->judul_pengumuman}}</td>
                  <td>{{$row->isi_pengumuman}}</td>
                  <td>{{$row->created_at->toFormattedDateString()}}</td>
                  <td> 
                    <a href="#" class="text-success mr-2 ubah" data-toggle="modal" data-target="#editModal" data-title="Ubah"
                       data-id="{{$row->id}}" data-judul="{{$row->judul_pengumuman}}" 
                       data-isi="{{$row->isi_pengumuman}}"	
                    >
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a onClick="deletePengumuman();" class="text-danger mr-2 delete" data-toggle="tooltip" data-id="{{$row->id}}" data-placement="bottom" title="Hapus">
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


<!-- Modal Tambah Pengumuman-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('pengumuman.store')}}">
          @csrf
          <div class="form-group">
            <label for="judul_pengumuman">Judul Pengumuman</label>
            <input type="text" id="judul_pengumuman" class="form-control" name="judul_pengumuman">
          </div>
          <div class="form-group">
            <label for="isi_pengumuman">Isi Pengumuman</label>
            <textarea class="form-control" id="isi_pengumuman" name="isi_pengumuman"></textarea>
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

<!-- Modal Edit Berita-->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('pengumuman.ubah')}}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id-pengumuman" value="">
          <div class="form-group">
            <label for="val-pengumuman">Judul Pengumuman</label>
            <input type="text" id="val-pengumuman" class="form-control" name="judul_pengumuman">
          </div>
          <div class="form-group">
            <label for="val-isi_pengumuman">Isi Pengumuman</label>
            <textarea class="form-control" id="val-isi_pengumuman" name="isi_pengumuman"></textarea>
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
  function deletePengumuman(){
    $(document).on('click','.delete', function(e){
      var id = $(this).data('id');
      var url = '{{route("pengumuman.destroy",":id")}}';
      e.preventDefault();
        swal({
          title: 'Hapus Pengumuman?',
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
                window.location = "{{ route('pengumuman.index') }}";
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
		var judul = $(this).data('judul');
		var isi = $(this).data('isi');

		document.getElementById('id-pengumuman').value = id;
		document.getElementById('val-pengumuman').value = judul;
		document.getElementById('val-isi_pengumuman').value = isi;

	});
</script>
@endsection