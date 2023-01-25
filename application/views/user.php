<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header"><b>Petugas</b>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#agt">Tambah</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($user as $row) { ?>
                        <tbody>
                            <tr>
                                <td><?= $row->username ?></td>
                                <td>
                                    <?= $row->user ?>
                                </td>
                                <td><a href="<?= base_url('User/update/' . $row->id_user); ?>"
                                        class="btn btn-outline-warning" aria-pressed="true" id="hapus"><i
                                            class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url('User/delete/' . $row->id_user); ?>"  class="btn btn-outline-danger"
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
                <h1 class="modal-title fs-5">Tambah Petugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form class="needs-validation " method="post" action="<?= site_url('User/insert') ?>" novalidate>
                        <input type="hidden" name="id_user" class="form-control">
                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Username Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Nama</label>
                                <input type="user" name="user" class="form-control" required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Nama Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-2">
                                <label class="form-label">Password</label></label>
                                <input type="password" name="password" class="form-control" required>
                                <div class=" invalid-feedback">
                                    Harus Diisi,Password Tidak Boleh Kosong!
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