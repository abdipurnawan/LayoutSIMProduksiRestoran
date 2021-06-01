
@extends('layouts/main')

@section('tittle', 'Menu Makanan')

@section('css')
  <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous"/>  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- CROPPER JS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
@endsection

@section('content')
  <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
      <div class="page-header-content pt-4">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto mt-4">
            <h1 class="page-header-title">
              <div class="page-header-icon"><i data-feather="activity"></i></div>
              Detail Menu Makanan
            </h1>
            {{-- <div class="page-header-subtitle">List Semua Menu Makanan</div> --}}
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
                <h3 class="card-title my-auto">Detail Menu Makanan</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form id="form-product" method="post" action="/update-menu-makanan" enctype="multipart/form-data">
                @csrf
                <div class="form-group form-group mt-1">
                    <label for="title">Nama Menu Makanan</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Masukkan nama menu makanan" required>
                </div>
                <div class="form-group form-group mt-1">
                    <label for="title">Harga Pokok Penjualan</label>
                    <input type="number" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Masukkan harga pokok penjualan" required>
                </div>
                <div class="form-group form-group mt-1">
                    <label for="title">Resep</label>
                    <textarea type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Masukkan resep menu makanan" rows="8" required></textarea>
                </div>
                <div class="form-group mt-1">
                    <label for="title">Pilih Bahan Baku</label>
                    <div class="form-row align-items-center" id="bahan_baku_1">
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_1">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>

                      <div class="form-row align-items-center" id="bahan_baku_2" >
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_2">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>

                      <div class="form-row align-items-center" id="bahan_baku_2" >
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_2">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>

                      <div class="form-row align-items-center" id="bahan_baku_2" >
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_2">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>

                      <div class="form-row align-items-center" id="bahan_baku_2" >
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_2">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>

                      <div class="form-row align-items-center" id="bahan_baku_2" >
                        <div class="col-sm-6 col-md-4 my-1">
                          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="select_bahan_baku_2">
                            <option selected>Pilih bahan baku</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Tomat</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-md-8 my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="number" class="form-control" id="inlineFormInputName" placeholder="Masukkan jumlah bahan baku">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Foto Makanan</label>
                    <br>
                    <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="url" hidden>
                    <img src="{{asset('assets/img/fast-food.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file" style="margin-top: 20px">
                        <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" onchange="readURL(this);" required>
                        <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Foto</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <a href="/menu-makanan" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success" href="/"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
                </form>
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
      $('#menu-makanan').addClass('active');

        $("#select_bahan_baku_1").change(function() {
            alert("hah");
            $("#bahan_baku_2").fadeIn();
        });

      $("#tbBahanBaku").DataTable({
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "oLanguage": {
          "sSearch": "Cari:",
          "sZeroRecords": "Data Tidak Ditemukan",
          "sSearchPlaceholder": "Cari menu makanan ...",
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
        'Penambahan menu makanan berhasil',
        'success'
      )
    }

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#propic')
            .attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
    }
    }
  </script>
@endpush