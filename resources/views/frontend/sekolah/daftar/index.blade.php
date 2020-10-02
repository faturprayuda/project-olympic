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
      @php $i = 1; @endphp
        @foreach($list as $sekolah => $peserta)
        <tr>
        <th scope="row">{{$i++}}</th>
        <td class="text-center">{{$sekolah}}</td>
        <td class="text-center">{{$peserta->count()}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection