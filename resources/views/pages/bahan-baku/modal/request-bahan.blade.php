<div class="modal fade" id="bahanBaku" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="bahanBakuLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request Bahan Baku</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body text-dark">
        <form action="">
          <div class="form-group">
            <label for="namaBahanBaku">Bahan Baku</label>
            <select class="form-control" id="namaBahanBaku">
              <option selected disabled>Pilih bahan baku ...</option>
              <option class="text-dark">Bahan Baku 1</option>
              <option class="text-dark">Bahan Baku 2</option>
              <option class="text-dark">Bahan Baku 3</option>
              <option class="text-dark">Bahan Baku 4</option>
              <option class="text-dark">Bahan Baku 5</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-success" type="button" onclick="showAlert()" data-dismiss="modal">Kirim Request</button>
      </div>
    </div>
  </div>
</div>