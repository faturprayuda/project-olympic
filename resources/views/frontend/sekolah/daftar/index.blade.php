@extends('backend.layouts.main_layout')
@section('main-content')
<div class="container mt-5 mb-5">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Nama Sekolah</th>
        <th scope="col" class="text-center">Jumlah Peserta</th>
      </tr>
    </thead>
    <tbody>
      @for($i = 0; $i < 10; $i++) <tr>
        <th scope="row">{{$i + 1}}</th>
        <td class="text-center">SMA {{$i + 1}}</td>
        <td class="text-center">{{rand(0,10)}}</td>
        </tr>
        @endfor
    </tbody>
  </table>
</div>
@endsection