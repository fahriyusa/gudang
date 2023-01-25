<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header"><b>Edit Anggota</b>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation"  action="<?= base_url('Anggota/simpan'); ?>" novalidate>
                <input type="hidden" name="id_wr" value="<?= $data->id_wr ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_wr" value="<?= $data->nama_wr ?>" required>
      <div class=" invalid-feedback">
                            Harus Diisi,Nama Tidak Boleh Kosong!
                        </div>
                    </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_wr" value="<?= $data->alamat_wr ?>" required>
      <div class=" invalid-feedback">
                    Harus Diisi,Alamat Tidak Boleh Kosong!
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Rt</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="rt" value="<?= $data->rt ?>"" required>
      <div class=" invalid-feedback">
                Harus Diisi,Rt Tidak Boleh Kosong!
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Rw</label>
        <div class="col-sm-10">
            <input class="form-control" name="rw" value="<?= $data->rw ?>" rows="3"></input>
            <div class=" invalid-feedback">
                Harus Diisi,Rw Tidak Boleh Kosong!
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">No Telephone</label>
        <div class="col-sm-10">
            <input class="form-control" name="no_tlp_wr" value="<?= $data->no_tlp_wr ?>" rows="3"></input>
            <div class=" invalid-feedback">
                Harus Diisi,No Telephone Tidak Boleh Kosong!
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url('Anggota'); ?>" class="btn btn-danger" type="button">Kembali</a>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
    </form>
</div>
</div>
</div>
</div>