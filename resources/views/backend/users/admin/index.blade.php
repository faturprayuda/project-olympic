@extends('backend.layouts.dashboard_admin')
@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <!-- <h1>Version 1</h1> -->
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li>Admin</li>
    </ul>
  </div>

  <div class="separator-breadcrumb border-top"></div>

  <div class="row">
    <!-- ICON BG -->
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center">
          <i class="fa fa-school" style="width:30%; height:20%"></i>
          <div class="content">
            <p class="text-primary text-24 line-height-1 mb-6" style="width: max-content;">Jummlah Sekolah : <span>{{DB::table('tbl_daftar_sekolah')->count()}}</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-6">
      <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center">
          <i class="fas fa-user-friends" style="width:30%; height:20%"></i>
          <div class="content">
            <p class="text-primary text-24 line-height-1 mb-6" style="width: max-content;">Jumlah Peserta : <span>{{DB::table('tb_peserta')->count()}}</span></p>
          </div>
        </div>
      </div>
    </div>

  </div>

 <!--  <div class="row">
    <div class="col-md-12">
      <div class="card o-hidden mb-4">
        <div class="card-header d-flex align-items-center border-0">
          <h3 class="w-50 float-left card-title m-0">New Users</h3>
          <div class="dropdown dropleft text-right w-50 float-right">
            <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="nav-icon i-Gear-2"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <a class="dropdown-item" href="#">Add new user</a>
              <a class="dropdown-item" href="#">View All users</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>

        <div class="">
          <div class="table-responsive">
            <table id="user_table" class="table  text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Avatar</th>
                  <th scope="col">Email</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Smith Doe</td>
                  <td>

                    <img class="rounded-circle m-0 avatar-sm-table "
                      src="{{asset('backend/assets/images/faces/1.jpg')}}" alt="">

                  </td>

                  <td>Smith@gmail.com</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>
                    <a href="#" class="text-success mr-2">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a href="#" class="text-danger mr-2">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jhon Doe</td>
                  <td>

                    <img class="rounded-circle m-0 avatar-sm-table "
                      src="{{asset('backend/assets/images/faces/1.jpg')}}" alt="">

                  </td>

                  <td>Jhon@gmail.com</td>
                  <td><span class="badge badge-info">Pending</span></td>
                  <td>
                    <a href="#" class="text-success mr-2">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a href="#" class="text-danger mr-2">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Alex</td>
                  <td>

                    <img class="rounded-circle m-0 avatar-sm-table "
                      src="{{asset('backend/assets/images/faces/1.jpg')}}" alt="">

                  </td>

                  <td>Otto@gmail.com</td>
                  <td><span class="badge badge-warning">Not Active</span></td>
                  <td>
                    <a href="#" class="text-success mr-2">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a href="#" class="text-danger mr-2">
                      <i class="nav-icon i-Close-Window font-weight-bold"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>Mathew Doe</td>
                  <td>

                    <img class="rounded-circle m-0 avatar-sm-table "
                      src="{{asset('backend/assets/images/faces/1.jpg')}}" alt="">

                  </td>

                  <td>Mathew@gmail.com</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>
                    <a href="#" class="text-success mr-2">
                      <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                    </a>
                    <a href="#" class="text-danger mr-2">
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
  </div> -->
</div>
@endsection