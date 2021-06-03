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
            <button class="btn btn-white btn-sm line-height-normal p-3" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Laporan</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a onclick="setChartDataMakanan(this)" class="dropdown-item" href="javascript:void(0);">Berdasarkan menu</a>
                <a onclick="setChartDataMingguan(this)" class="dropdown-item active" href="javascript:void(0);">Minggu</a>
                <a onclick="setDataBulanan(this)" class="dropdown-item" href="javascript:void(0);">Bulan</a>
                <a onclick="setDataTahunan(this)" class="dropdown-item" href="javascript:void(0);">Tahun</a>
            </div>
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
                  @if (Carbon\Carbon::now()->setTimezone('GMT+8')->format('H') <= 10 )  
                    <h1 class="text-primary">Selamat Datang, Selamat Pagi</h1>
                  @else
                    @if (Carbon\Carbon::now()->setTimezone('GMT+8')->format('H') <= 16  && Carbon\Carbon::now()->setTimezone('GMT+8')->format('H') > 10)  
                      <h1 class="text-primary">Selamat Datang, Selamat Siang</h1>
                    @else
                      <h1 class="text-primary">Selamat Datang, Selamat Malam</h1>
                    @endif
                  @endif
                  <p class="text-gray-700 mb-0">Daftar Order Makanan.</p>
                  <div class="card-body d-flex flex-column justify-content-center">
                    <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                  </div>
                </div>
              </div>
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
    <script>

    function setChartDataMingguan(e){
      $('.dropdown-item').removeClass("active");
      e.classList.add("active");
      myBarChart.clear();
      myBarChart.data.labels = ["Minggu ke-1", "Minggu Ke-2", "Minggu Ke-3", "Minggu Ke-4"];
      myBarChart.data.datasets = [{
            label: "Revenue",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: [3245000, 4768500, 7821000, 4042300]
        }]
      myBarChart.update();
    }
    </script>
@endpush