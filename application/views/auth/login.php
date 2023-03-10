<!-- navbar -->
<nav class="navbar bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Gudang Abrak</span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Sruktur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Kunci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Informasi</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end navbar -->

<?php if ($this->session->flashdata('message_login_error')): ?>
    <div class="invalid-feedback">
        <?= $this->session->flashdata('message_login_error') ?>
    </div>
<?php endif ?>
<?= $this->session->flashdata('message'); ?>

<!-- login -->
<div class="card-header">
    <div class="card-body position-absolute top-50 start-50 translate-middle">
        <div class="card text-center">
            <div class="card-header">
                <img src="./assets/img/user.png" class="rounded mx-auto d-block" alt="user">
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" action="<?= base_url('Login/login'); ?>" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                        <div class=" invalid-feedback">
                            Username Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <div class=" invalid-feedback">
                            Password Tidak Boleh Kosong!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end login -->