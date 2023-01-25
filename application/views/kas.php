<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header"><b>Kas Gudang</b>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-warning me-md-2" href="<?= base_url('Laporan/kas') ?>" type="button">Cetak</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#brg">Tambah</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sumber</th>
                            <th>Jenis (Masuk/Keluar)</th>
                            <th>Nama Kas</th>
                            <th>Jumlah</th>
                            <th>Tanggal Kas</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($kas as $row) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $row->nama_wr ?>
                                </td>
                                <td>
                                    <?= $row->status_txt ?>
                                </td>
                                <td>
                                    <?= $row->nama_kas ?>
                                </td>
                    
                                <td>
                                    <?= $row->jml ?>
                                </td>
                                <td>
                                    <?= $row->tgl_kas ?>
                                </td>
                                <td>
                                    <?= $row->ket ?>
                                </td>
                                <td><a href="<?= base_url('Kas/Update/' . $row->id_kas); ?>" class="btn btn-outline-warning"
                                        aria-pressed="true"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url('Kas/delete/' . $row->id_kas); ?>" class="btn btn-outline-danger"
                                        aria-pressed="true"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-danger" href="<?= base_url('Home') ?>" type="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="brg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Catatan Kas Gudang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form class="needs-validation " method="post" action="<?= site_url('Kas/insert') ?>" novalidate>
                        <input type="hidden" name="id_brg" class="form-control">
                        <div class="row mb-2">
                            <label class="form-label">Pilih Sumber</label>
                            <select name="id_wr" class="form-select" required>
                                <option value="">Pilih Warga</option>
                                <?php foreach ($wr->result() as $row) { ?>
                                    <option value="<?= $row->id_wr ?>">
                                        <?= $row->nama_wr ?>
                                    </option>
                                <?php }
                                ?>
                            </select>
                            <div class=" invalid-feedback">
                                Harus Diisi,Sumber Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Pilih Jenis Catatan</label>
                                <select name="jenis" class="form-select" required>
                                    <option value="">Pilih Status</option>
                                    <option value="m">Masuk</option>
                                    <option value="k">keluar</option>
                                </select>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Status Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Nama Kas</label>
                                <input type="text" name="nama_kas" class="form-control" placeholder="masukkan Nama Kas"
                                    required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Nama Kas Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jml" class="form-control" placeholder="masukkan Jumlah"
                                    required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Jumlah Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Tanggal</label>
                                <input type="Date" name="tgl_kas" class="form-control" placeholder="Masukkan Tanggal"
                                    required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Tanggal Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="ket" class="form-control" placeholder="opsional">
                                <!-- <div class=" invalid-feedback">
                                    Harus Diisi,Satuan Barang Tidak Boleh Kosong!
                                </div> -->
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>