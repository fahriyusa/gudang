<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header"><b>Edit Barang</b>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" action="<?= base_url('Barang/simpan'); ?>" novalidate>
                    <input type="hidden" name="id_brg" value="<?= $data->id_brg ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nm_brg" value="<?= $data->nm_brg ?>" required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Nama Barang Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jml_brg" value="<?= $data->jml_brg ?>"
                                required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Jumlah Barang Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="satuan" value="<?= $data->satuan ?>"" required>
      <div class=" invalid-feedback">
                            Harus Diisi,Satuan Barang Tidak Boleh Kosong!
                        </div>
                    </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input class="form-control" name="ket_brg" value="<?= $data->ket_brg ?>" rows="3"></input>
                    <div class=" invalid-feedback">
                        Harus Diisi,Keterangan Tidak Boleh Kosong!
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('Barang'); ?>" class="btn btn-danger me-md-2" type="button">Kembali</a>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>