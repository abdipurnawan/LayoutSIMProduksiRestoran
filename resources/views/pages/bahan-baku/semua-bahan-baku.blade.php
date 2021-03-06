@extends('layouts/main')

@section('tittle', 'Bahan Baku')

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
              Bahan Baku
            </h1>
            <div class="page-header-subtitle">List Semua bahan Baku Makanan</div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-n10">
    <div class="row">
      <div class="col-12 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <div class="row">
              <div class="col-6 my-auto">
                <h3 class="card-title my-auto">Daftar Bahan Baku</h3>
              </div>
              <div class="col-6 my-auto d-flex justify-content-end">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bahanBaku">Request Bahan</button>
                @include('pages/bahan-baku/modal/request-bahan')
              </div>
            </div>
          </div>
          <div class="card-body table-responsive-md">
            <table id="tbBahanBaku" class="table table-responsive-sm table-bordered table-hover">
              <thead class="text-center">
                <tr>
                  <th>No</th>
                  <th>Nama Bahan</th>
                  <th>Satuan</th>
                  <th>Kategori</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">1</td>
                  <td class="align-middle">Bawang Merang</td>
                  <td class="align-middle">Siung</td>
                  <td class="align-middle">Rempah</td>
                  <td class="align-middle">3</td>
                  <td class="align-middle">
                    <div class="badge badge-success badge-pill">Tersedia</div>
                  </td>
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">2</td>
                  <td class="align-middle">Bawang Putih</td>
                  <td class="align-middle">Siung</td>
                  <td class="align-middle">Rempah</td>
                  <td class="align-middle">10</td>
                  <td class="align-middle">
                    <div class="badge badge-success badge-pill">Tersedia</div>
                  </td>
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">3</td>
                  <td class="align-middle">Garam</td>
                  <td class="align-middle">Kilogram</td>
                  <td class="align-middle">Penyedap</td>
                  <td class="align-middle">10</td>
                  <td class="align-middle">
                    <div class="badge badge-danger badge-pill">Tidak Tersedia</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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

      $("#tbBahanBaku").DataTable({
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "oLanguage": {
          "sSearch": "Cari:",
          "sZeroRecords": "Data Tidak Ditemukan",
          "sSearchPlaceholder": "Cari bahan baku ...",
          "infoEmpty": "Menampilkan 0 Data",
          "infoFiltered": "(dari _MAX_ Data)"
        },
        "language": {
          "paginate": {
            "previous": 'Sebelumnya',
            "next": 'Berikutnya'
          },
          "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
        },
      });
    });

    function showAlert() {
      Swal.fire(
        'Berhasil!',
        'Request Bahan Baku Makanan Berhasil Dikirim',
        'success'
      )
    }
  </script>
@endpush