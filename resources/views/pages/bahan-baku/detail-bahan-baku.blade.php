@extends('layouts/main')

@section('tittle', 'Detail Bahan Baku')

@section('css')
  <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous"/>  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
  <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
      <div class="page-header-content pt-4">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto mt-4">
            <h1 class="page-header-title">
              <div class="page-header-icon"><i data-feather="activity"></i></div>
              Detail Bahan Baku
            </h1>
            <div class="page-header-subtitle">Detail Bahan Baku Makanan</div>
          </div>
          <div class="col-12 col-xl-auto mt-4">
            <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
              {{Carbon\Carbon::now()->setTimezone('GMT+8')->format('d M Y H:i')}}
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-n10">
    <div class="row">
      <div class="col-12 mb-4">
        <div class="card h-100">
          <div class="card-body"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function(){
      $('#bahan-baku').removeClass('collapsed');
      $('#collapse-manajemen-bahan-baku').addClass('show');
      $('#data-bahan-baku').addClass('active');
    });
  </script>
@endpush