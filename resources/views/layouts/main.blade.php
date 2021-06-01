<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tittle')</title>

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('base-template/dist/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      html, body {
        font-family: 'Nunito', sans-serif;
      }
    </style>

    @stack('css')
  </head>
  
  <body class="nav-fixed">

      {{-- Navbar Start --}}
        @include('layouts/navbar')
      {{-- Navbar End --}}

      <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
          {{-- Sidebar Start --}}
            @include('layouts/sidebar')
          {{-- Sidebar End --}}
        </div>

        <div id="layoutSidenav_content">
          {{-- Content Start --}}
            @include('layouts/content')
          {{-- Content End --}}

          {{-- Content Start --}}
            @include('layouts/footer')
          {{-- Content End --}}
        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('base-template/dist/js/scripts.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('base-template/dist/assets/demo/chart-area-demo.js')}}"></script>
      <script src="{{ asset('base-template/dist/assets/demo/chart-bar-demo.js')}}"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('base-template/dist/assets/demo/datatables-demo.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('base-template/dist/assets/demo/date-range-picker-demo.js')}}"></script>
      @stack('js')
  </body>
</html>
