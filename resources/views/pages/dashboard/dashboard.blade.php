@extends('layouts/main')

@section('tittle', 'Dashboard')

@section('content')
  <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
      <div class="page-header-content pt-4">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto mt-4">
            <h1 class="page-header-title">
              <div class="page-header-icon"><i data-feather="activity"></i></div>
              Dashboard
            </h1>
            <div class="page-header-subtitle">Dasboard Utama dari Sistem Manajemen Produksi</div>
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
          <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
            <div class="row align-items-center">
              <div class="col-xl-8 col-xxl-12">
                <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                  @if (Carbon\Carbon::now()->setTimezone('GMT+8')->format('i') >= 0 || Carbon\Carbon::now()->setTimezone('GMT+8')->format('i') < 10 )  
                    <h1 class="text-primary">Selamat Datang, Selamat Pagi</h1>
                  @else
                    @if (Carbon\Carbon::now()->setTimezone('GMT+8')->format('i') > 10 || Carbon\Carbon::now()->setTimezone('GMT+8')->format('i') < 16 )  
                      <h1 class="text-primary">Selamat Datang, Selamat Siang</h1>
                    @else
                      <h1 class="text-primary">Selamat Datang, Selamat Malam</h1>
                    @endif
                  @endif
                  <p class="text-gray-700 mb-0">It's time to get started! View new opportunities now, or continue on your previous work.</p>
                </div>
              </div>
              <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="{{ asset('base-template/dist/assets/img/freepik/at-work-pana.svg')}}" style="max-width: 26rem;"/></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
      $(document).ready(function(){
        $('#dashboard').addClass('active');
      });
    </script>
@endpush