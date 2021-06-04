
@extends('layouts/main')

@section('tittle', 'Order Makanan')

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
              Order Makanan
            </h1>
            <div class="page-header-subtitle">List Semua Order Makanan</div>
          </div>
        
          {{-- <div class="col-12 col-xl-auto mt-4">
            <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
              {{Carbon\Carbon::now()->setTimezone('GMT+8')->format('d M Y H:i')}}
            </button>
          </div> --}}
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
                <h3 class="card-title my-auto">Daftar Menu Makanan</h3>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive-md">
            <table id="tbBahanBaku" class="table table-responsive-sm table-bordered table-hover">
              <thead class="text-center">
                <tr>
                  <th>No</th>
                  <th>Nama Menu</th>
                  <th>Kategori</th>
                  <th>Jumlah Pesanan</th>
                  <th>Status</th>
                  <th class="d-md-none">Tindakan</th>
                  <th class="d-none d-md-table-cell">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">1</td>
                  <td class="align-middle">Nasi Goreng Spesial</td>
                  <td class="align-middle">Makanan</td>
                  <td class="align-middle">2</td>
                  <td class="align-middle">
                    <div class="badge badge-primary badge-pill">Belum diproses</div>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <a style="margin-right:7px" class="btn btn-info btn-sm" href="#" onclick="statusOrder()" ><i class="fas fa-pencil-alt" ></i></a>
                  </td>
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">2</td>
                  <td class="align-middle">Ice Tea</td>
                  <td class="align-middle">Minuman</td>
                  <td class="align-middle">2</td>
                  <td class="align-middle">
                    <div class="badge badge-success badge-pill">Selesai</div>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <a style="margin-right:7px" class="btn btn-info btn-sm" href="#" onclick="statusOrder()" ><i class="fas fa-pencil-alt" ></i></a>
                  </td>
                </tr>
                <tr class="text-center align-middle my-auto">
                  <td class="align-middle">3</td>
                  <td class="align-middle">Roti Bakar</td>
                  <td class="align-middle">Makanan</td>
                  <td class="align-middle">1</td>
                  <td class="align-middle">
                    <div class="badge badge-warning badge-pill">Sedang diproses</div>
                  </td>
                  <td class="text-center align-middle d-none d-md-table-cell">
                    <a style="margin-right:7px" class="btn btn-info btn-sm" href="#" onclick="statusOrder()" ><i class="fas fa-pencil-alt" ></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="orderMakanan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="bahanBakuLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tindakan Order Makanan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body text-dark text-center">
            <button class="btn btn-success" type="button" onclick="alertSelesai()" data-dismiss="modal">Order Selesai</button>
            <button class="btn btn-primary" type="button" onclick="alertSelesai()" data-dismiss="modal">Mulai Proses</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js') 
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#order-makanan').addClass('active');

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

    function alertSelesai() {
      Swal.fire(
        'Berhasil!',
        'Status order makanan berhasil diubah',
        'success'
      )
    }

    function alertUpdate() {
      Swal.fire(
        'Berhasil!',
        'Menu makanan berhasil diupdate',
        'success'
      )
    }

    function alertDelete() {
      Swal.fire(
        'Berhasil!',
        'Menu makanan berhasil dihapus',
        'success'
      )
    }

    function deleteMenu(){
        swal({
            title: 'Anda yakin ingin menghapus menu ini?',
            icon: 'warning',
            buttons: ["Tidak", "Ya"],
        }).then(function(value) {
            if(value){
                alertDelete();
            }
        });
    }

    function statusOrder(){
        $('#orderMakanan').modal('show');
    }
  </script>
    @if (session()->has('statusInput'))
      <script>
          alertAdd();
      </script>
    @endif
    @if (session()->has('statusUpdate'))
      <script>
          alertUpdate();
      </script>
    @endif
@endpush