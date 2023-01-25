<div class="container">
  <!-- Content here -->
  <div class="align-self-center">
    <div class="card border-light mb-3 mt-5" style="width: auto;">
      <div class="card-header"><b>Barang</b>
        <div class="d-flex justify-content-end">
        <a class="btn btn-warning me-md-2" href="<?= base_url('Laporan/barang')?>" type="button">Cetak</a>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#brg">Tambah</button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Barang</th>
              <th>Jumlah</th>
              <th>Satuan</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php
          foreach ($brg as $row) { ?>
            <tbody>
              <tr>
                <td><?= $row->nm_brg ?></td>
                <td>
                  <?= $row->jml_brg ?>
                </td>
                <td><?= $row->satuan ?></td>
                <td>
                  <?= $row->ket_brg ?>
                </td>
                <td><a href="<?= base_url('Barang/Update/' . $row->id_brg); ?>" class="btn btn-outline-warning"
                    aria-pressed="true"><i class="fa fa-pencil"></i></a>
                  <a href="<?= base_url('Barang/delete/' . $row->id_brg); ?>" class="btn btn-outline-danger"
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
        <h1 class="modal-title fs-5">Tambah Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class="needs-validation " method="post" action="<?= site_url('Barang/insert') ?>" novalidate>
            <input type="hidden" name="id_brg" class="form-control">
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nm_brg" class="form-control" placeholder="Masukkan Nama Barang" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Nama Barang Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Jumlah Barang</label>
                <input type="number" name="jml_brg" class="form-control" placeholder="Masukkan Jumlah Barang" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Jumlah Barang Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Satuan Barang Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Keterangan</label>
                <input type="text" name="ket_brg" class="form-control" placeholder="Masukkan Keterangan">
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