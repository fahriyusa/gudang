<div class="container">
  <!-- Content here -->
  <div class="align-self-center">
    <div class="card border-light mb-3 mt-5" style="width: auto;">
      <div class="card-header"><b>Edit Petugas</b>
      </div>
      <div class="card-body">
        <form method="post" class="needs-validation" action="<?= base_url('User/simpan'); ?>" novalidate>
          <input type="hidden" name="id_user" value="<?= $data->id_user ?>">

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" value="<?= $data->username ?>" readonly>
              <!-- <div class=" invalid-feedback">
                Username Tidak Boleh Kosong!
              </div> -->
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user" value="<?= $data->user ?>" required>
              <div class=" invalid-feedback">
               Nama Tidak Boleh Kosong!
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" value="<?= $data->password ?>" required>
              <div class=" invalid-feedback">
                Password Tidak Boleh Kosong!
              </div>
            </div>
          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url('User'); ?>" class="btn btn-danger me-md-2" type="button">Kembali</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>