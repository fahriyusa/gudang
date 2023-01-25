<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header"><b>Edit Kas</b>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" action="<?= base_url('Kas/simpan'); ?>" novalidate>
                    <input type="hidden" name="id_kas" value="<?= $row[0]->id_kas ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Sumber</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="id_wr" reqired>
                                <option value=""> Pilih Warga </option>
                                <?php foreach ($wr as $wikwik) { ?>
                                    <option <?=$wikwik->id_wr ==$row[0]->id_wr ? 'selected':''?> value="<?php echo $wikwik->id_wr; ?>"><?php echo $wikwik->nama_wr; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Pilih Jenis Catatan</label>
                        <div class="col-sm-10">
                            <select name="jenis" class="form-select" required>
                                <option value="m" <?php if ($row[0]->jenis == 'm')
                                    echo 'selected="selected"'; ?>>Masuk
                                </option>
                                <option value="k" <?php if ($row[0]->jenis == 'k')
                                    echo 'selected="selected"'; ?>>keluar
                                </option>
                            </select>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Kas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kas" value="<?= $row[0]->nama_kas ?>"
                                required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ket" value="<?= $row[0]->ket ?>" required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="jml" value="<?= $row[0]->jml ?>" required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_kas" value="<?= $row[0]->tgl_kas ?>"
                                required>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('Kas'); ?>" class="btn btn-danger me-md-2" type="button">Kembali</a>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>