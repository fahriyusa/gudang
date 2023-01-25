<div class="container">
    <!-- Content here -->
    <div class="align-self-center">
        <div class="card border-light mb-3 mt-5" style="width: auto;">
            <div class="card-header">Informasi Gudang</div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama Gudang</th>
                            <th>Alamat Gudang</th>
                            <th>Ketua</th>
                            <th>Wakil Ketua</th>
                            <th>Sekertaris</th>
                            <th>Bendahara</th>
                            <th>Kunci</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($informasi as $row) { ?>
                        <tbody>
                            <tr>
                                <td><?= $row->nm_gdg ?></td>
                                    <td><?= $row->alamat_gdg ?></td>
                                    <td><?= $row->ketua ?></td>
                                    <td><?= $row->wakil_ketua ?></td>
                                    <td><?= $row->sekertaris ?></td>
                                    <td><?= $row->bendahara ?></td>
                                    <td><?= $row->kunci ?></td>
                                    <td><a href="<?= base_url('Informasi/update/'. $row->id_gdg);?>" class="btn btn-outline-warning" aria-pressed="true"><i class="fa fa-pencil"></i></a></td>
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