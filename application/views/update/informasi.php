<div class="container">
  <!-- Content here -->
  <div class="align-self-center">
    <div class="card border-light mb-3 mt-5" style="width: auto;">
      <div class="card-header"><b>Edit Gudang</b>
      </div>
      <div class="card-body">
        <form method="post" class="needs-validation" action="<?= base_url('Informasi/simpan'); ?>" novalidate>
          <input type="hidden" name="id_gdg" value="<?= $data->id_gdg ?>">

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Gudang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nm_gdg" value="<?= $data->nm_gdg ?>" required>
              <div class=" invalid-feedback">
                Nama Gudang Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat Gudang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat_gdg" value="<?= $data->alamat_gdg ?>" required>
              <div class=" invalid-feedback">
                Alamat Gudang Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Ketua</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="ketua" value="<?= $data->ketua ?>" required>
              <div class=" invalid-feedback">
                Ketua Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Wakil Ketua</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="wakil_ketua" value="<?= $data->wakil_ketua ?>" required>
              <div class=" invalid-feedback">
                Wakil Ketua Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Sekertaris</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sekertaris" value="<?= $data->sekertaris ?>" required>
              <div class=" invalid-feedback">
                Sekertaris Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Bendahara</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="bendahara" value="<?= $data->bendahara ?>" required>
              <div class=" invalid-feedback">
                Bendahara Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Pembawa Kunci Gudang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kunci" value="<?= $data->kunci ?>" required>
              <div class=" invalid-feedback">
                Pembawa Kunci Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url('Informasi'); ?>" class="btn btn-danger me-md-2" type="button">Kembali</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>