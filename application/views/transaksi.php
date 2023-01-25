<div class="container">
    <!-- Content here -->
    <div class="row">
        <div class="col">
            <div class="align-self-center">
                <div class="card border-light mb-3 mt-5" style="width: auto;">
                    <div class="card-header"><b>Transaksi</b>
                        <div class=" gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-warning me-md-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#Pinjam">Tambah Peminjaman</button>
                            <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                data-bs-target="#kembali">Tambah
                                Pengembalian</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover " data-toggle="table"
                            data-sortable="true">
                            <thead>
                                <tr>
                                    <th>Jenis</th>
                                    <th>Peminjam</th>
                                    <th>Acara</th>
                                    <th>Barang</th>
                                    <th>Jumlah</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($data->result() as $row) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $row->status_cuy ?>
                                        </td>
                                        <td>
                                            <?= $row->nama_wr ?>
                                        </td>
                                        <td>
                                            <?= $row->acara ?>
                                        </td>
                                        <td>
                                            <?= $row->nm_brg ?>
                                        </td>
                                        <td>
                                            <?= $row->jml ?>
                                        </td>
                                        <td>
                                            <?= $row->alamat ?>
                                        </td>
                                        <td>
                                            <?= $row->tgl_p ?>
                                        </td>
                                        <td>
                                            <?= $row->tgl_k ?>
                                        </td>
                                        <td>
                                            <?= $row->ket ?>
                                        </td>
                                        <td><a href="<?= base_url('Transaksi/Update/' . $row->id_transaksi); ?>"
                                                class="btn btn-outline-warning" aria-pressed="true"><i
                                                    class="fa fa-pencil"></i></a>
                                            <!-- <a href="<?= base_url('Transaksi/delete/' . $row->id_transaksi); ?>"
                                                                                    class="btn btn-outline-danger" aria-pressed="true"><i class="fa fa-trash"></i></a> -->
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
        <div class="modal fade " id="kembali" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Tambah Pengembalian</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form class="needs-validation " method="post" action="<?= site_url('Transaksi/insert') ?>"
                                novalidate>
                                <input type="hidden" name="id_transaksi" class="form-control">
                                <input type="hidden" name="jenis" value="k">
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Peminjam</label>
                                        <select name="id_wr" class="form-select" required>
                                            <option value="">Pilih Warga</option>
                                            <?php foreach ($wr as $cuy): ?>
                                                <option value="<?= $cuy->id_wr ?>">
                                                    <?= $cuy->nama_wr ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harus Diisi,Nama Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Barang</label>
                                        <select name="id_brg" class="form-select" required>
                                            <option value="">Pilih Barang</option>
                                            <?php foreach ($brg as $cuy): ?>
                                                <option value="<?= $cuy->id_brg ?>">
                                                    <?= $cuy->nm_brg ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harus Diisi,Nama Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Acara</label>
                                        <input type="text" name="acara" class="form-control"
                                            placeholder="Masukkan Acara Peminjam" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Acara Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Jumlah</label>
                                        <input type="number" name="jml" class="form-control"
                                            placeholder="Masukkan Jumlah" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Jumlah Barang Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan Alamat" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Alamat Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Tanggal Kembali</label>
                                        <input type="date" name="tgl_k" class="form-control"
                                            placeholder="Masukkan Tanggal" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Tanggal Pinjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Keterangan</label>
                                        <input type="text" name="ket" class="form-control"
                                            placeholder="Masukkan Alamat (opsional)">
                                        <div class="valid-feedback">
                                        </div>
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
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Pinjam" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Tambah Peminjaman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form class="needs-validation " method="post" action="<?= site_url('Transaksi/insert') ?>"
                                novalidate>
                                <input type="hidden" name="jenis" value="p">
                                <!-- <input type="hidden" name="id_transaksi"> -->
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Peminjam</label>
                                        <select name="id_wr" class="form-select" required>
                                            <option value="">Pilih Warga</option>
                                            <?php foreach ($wr as $cuy): ?>
                                                <option value="<?= $cuy->id_wr ?>">
                                                    <?= $cuy->nama_wr ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harus Diisi,Nama Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Barang</label>
                                        <select name="id_brg" class="form-select" required>
                                            <option value="">Pilih Barang</option>
                                            <?php foreach ($brg as $cuy): ?>
                                                <option value="<?= $cuy->id_brg ?>">
                                                    <?= $cuy->nm_brg ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harus Diisi,Nama Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Acara</label>
                                        <input type="text" name="acara" class="form-control"
                                            placeholder="Masukkan Acara Peminjam" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Acara Peminjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Jumlah</label>
                                        <input type="number" name="jml" class="form-control"
                                            placeholder="Masukkan Jumlah" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Jumlah Barang Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan Alamat" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Alamat Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Tanggal Pinjam</label>
                                        <input type="date" name="tgl_p" class="form-control"
                                            placeholder="Masukkan Tanggal" required>
                                        <div class=" invalid-feedback">
                                            Harus Diisi,Tanggal Pinjam Tidak Boleh Kosong!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Keterangan</label>
                                        <input type="text" name="ket" class="form-control"
                                            placeholder="Masukkan Alamat (opsional)">
                                        <div class="valid-feedback">
                                        </div>
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
        </div>
    </div>
</div>
<script>
    $("#sortable-table th").on("click", function () {
        var column = $(this).data("sort");
        sortTable(column);
    });

    function sortTable(column) {
        //sort logic here
    }
</script>