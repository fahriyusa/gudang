<nav class="navbar bg-info">
    <div class="container-fluid">
        <a class="navbar-brand nprinsley-text-glitchan" href="<?= base_url('Home')?>">Gudang Abrak Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form> -->
                    <br>
                    <li class="nav-item">
                        <a href="<?= base_url('Home')?>" class="text-decoration-none active" aria-current="page" >Home</a>
                    </li><br>

                    <li class="nav-item">
                        <a class="text-decoration-none active" aria-current="page" href="<?= base_url('Barang')?>">Barang</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="text-decoration-none active" aria-current="page" href="<?= base_url('Anggota')?>">Anggota</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="text-decoration-none active" aria-current="page" href="<?= base_url('Kas')?>">Kas</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="text-decoration-none active" aria-current="page" href="<?= base_url('Informasi')?>">Informasi Gudang</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="text-decoration-none active" aria-current="page" href="<?= base_url('User')?>">Petugas</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="text-danger nav-link" aria-current="page" href="<?= base_url('Login/logout')?>">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-danger nav-link" aria-current="page" href="<?= base_url('Lol')?>">lol</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>