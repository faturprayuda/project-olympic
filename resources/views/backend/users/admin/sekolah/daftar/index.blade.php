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
                  <th>Nama Siswa</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td>Nixon</td>
                  <td>
                    <a href="#" class="text-success mr-2" data-toggle="tooltip" data-placement="bottom" title="Ubah">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
                  </td>
                </tr>
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
        <form>
          <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" class="form-control" id="nama_sekolah">
          </div>
          <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa">
            <a href="#" class="text-success mr-2 text-20" data-toggle="tooltip" data-placement="bottom"
              title="Tambah Siswa">
              <i class="nav-icon i-Add font-weight-bold"></i>
            </a>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
<script>
  $('#example').DataTable();
</script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection