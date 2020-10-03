<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Gull - Laravel + Bootstrap 4 admin template</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

  <link id="gull-theme" rel="stylesheet" href="{{asset('backend/assets/styles/css/themes/lite-purple.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/styles/vendor/perfect-scrollbar.css')}}">

  {{-- data table --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
  @yield('after-style')

</head>