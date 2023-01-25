<div class="container">
  <!-- Content here -->
  <div class="align-self-center">
    <div class="card border-light mb-3 mt-5" style="width: auto;">
      <div class="card-header"><b>Anggota</b>
        <div class="d-flex justify-content-end">
        <a class="btn btn-warning me-md-2" href="<?= base_url('Laporan/anggota')?>" type="button">Cetak</a>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agt">Tambah</button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Rt</th>
              <th>Rw</th>
              <th>no telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php
          foreach ($anggota as $row) { ?>
            <tbody>
              <tr>
                <td><?= $row->nama_wr ?></td>
                <td>
                  <?= $row->alamat_wr ?>
                </td>
                <td><?= $row->rt ?></td>
                <td>
                  <?= $row->rw ?>
                </td>
                <td>
                  <?= $row->no_tlp_wr ?>
                </td>
                <td><a href="<?= base_url('Anggota/update/' . $row->id_wr); ?>" class="btn btn-outline-warning"
                    aria-pressed="true" id="hapus"><i class="fa fa-pencil"></i></a>
                  <a href="<?= base_url('Anggota/delete/' . $row->id_wr); ?>"  class="btn btn-outline-danger"
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


<!-- Modal Tambah-->
<div class="modal fade " id="agt" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Tambah Anggota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class="needs-validation " method="post" action="<?= site_url('Anggota/insert') ?>" novalidate>
            <input type="hidden" name="id_wr" class="form-control">
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Nama</label>
                <input type="text" name="nama_wr" class="form-control" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Nama Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat_wr" class="form-control" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Alamat Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Rt</label>
                <input type="number" name="rt" class="form-control" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Rt Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">Rw</label>
                <input type="number" name="rw" class="form-control" required>
                <div class=" invalid-feedback">
                  Harus Diisi,Rw Tidak Boleh Kosong!
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="mb-2">
                <label class="form-label">No Telepone</label>
                <input type="" name="no_tlp_wr" class="form-control">
                <!-- <div class=" invalid-feedback">
                  Harus Diisi,Rt Tidak Boleh Kosong!
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
