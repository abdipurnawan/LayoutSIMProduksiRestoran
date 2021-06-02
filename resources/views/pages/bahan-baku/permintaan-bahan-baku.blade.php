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
              Permintaan
            </h1>
            <div class="page-header-subtitle">List Semua Permintaan Bahan Baku Makanan</div>
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
              <div class="col-12 my-auto">
                <h3 class="card-title my-auto">Daftar Permintaan Bahan Baku</h3>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive-md">
            <table id="tbRequestBahan" class="table table-responsive-md table-bordered table-hover">
              <thead class="text-center">
                <tr>
                  <th>No</th>
                  <th>Nama Bahan</th>
                  <th>Satuan</th>
                  <th>Kategori</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                  <th class="d-md-none">Tindakan</th>
                  <th class="d-none d-md-table-cell">Tindakan</th>
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
                    <div class="badge badge-success badge-pill">Sudah Sampai</div>
                  </td>
                  <td class="text-center align-middle d-md-none">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit mr-1"></i> Tindakan
                    </button>
                  </td>
                  @include('pages/bahan-baku/modal/konfirmasi-request')
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">1</td>
                  <td class="align-middle">Bawang Merang</td>
                  <td class="align-middle">Siung</td>
                  <td class="align-middle">Rempah</td>
                  <td class="align-middle">3</td>
                  <td class="align-middle">
                    <div class="badge badge-danger badge-pill">Dibatalkan</div>
                  </td>
                  <td class="text-center align-middle d-md-none">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit mr-1"></i> Tindakan
                    </button>
                  </td>
                  @include('pages/bahan-baku/modal/konfirmasi-request')
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">2</td>
                  <td class="align-middle">Bawang Putih</td>
                  <td class="align-middle">Siung</td>
                  <td class="align-middle">Rempah</td>
                  <td class="align-middle">10</td>
                  <td class="align-middle">
                    <div class="badge badge-primary badge-pill">Menunggu Konfirmasi</div>
                  </td>
                  <td class="text-center align-middle d-md-none">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit mr-1"></i> Tindakan
                    </button>
                  </td>
                  @include('pages/bahan-baku/modal/konfirmasi-request')
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">3</td>
                  <td class="align-middle">Garam</td>
                  <td class="align-middle">Kilogram</td>
                  <td class="align-middle">Penyedap</td>
                  <td class="align-middle">10</td>
                  <td class="align-middle">
                    <div class="badge badge-warning badge-pill">Dalam Proses</div>
                  </td>
                  <td class="text-center align-middle d-md-none">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <button class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#konfirmasiBahanBaku">
                      <i class="fas fa-edit mr-1"></i> Tindakan
                    </button>
                  </td>
                  @include('pages/bahan-baku/modal/konfirmasi-request')
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
      $('#permintaan-bahan-baku').addClass('active');

      $("#tbRequestBahan").DataTable({
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "oLanguage": {
          "sSearch": "Cari:",
          "sZeroRecords": "Data Tidak Ditemukan",
          "sSearchPlaceholder": "Cari data ...",
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