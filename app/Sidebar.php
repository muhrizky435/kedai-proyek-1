<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'dashboard') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark'; ?> "
                                aria-current="page" href="dashboard"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>

                        <?php if ($hasil['level'] == 1 || $hasil['level'] == 3) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'menu') ? 'active link-light' : 'link-dark'; ?>"
                                    href="menu"><i class="bi bi-egg-fried"></i> Daftar Menu</a>
                            </li>
                        <?php } ?>

                        <?php if ($hasil['level'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'kategori') ? 'active link-light' : 'link-dark'; ?>"
                                    href="kategori"><i class="bi bi-cart4"></i> Kategori Menu</a>
                            </li>
                        <?php } ?>

                        <?php if ($hasil['level'] == 1 || $hasil['level'] == 2 || $hasil['level'] == 3) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active link-light' : 'link-dark'; ?>"
                                    href="order"><i class="bi bi-card-text"></i> Order</a>
                            </li>
                        <?php } ?>
                        <?php if ($hasil['level'] == 1 || $hasil['level'] == 2 || $hasil['level'] == 3) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'transaksi') ? 'active link-light' : 'link-dark'; ?>"
                                    href="transaksi"><i class="bi bi-card-text"></i> Transaksi</a>
                            </li>
                        <?php } ?>
                        <h5 class="pt-2"><img src="../img/logo1.png" alt="logo kedai wariyem" width="50px"> Kedai
                        Wartiyem</h5>

                        <?php if ($hasil['level'] == 1 || $hasil['level'] == 3) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'dapur') ? 'active link-light' : 'link-dark'; ?>"
                                    href="dapur"><i class="bi bi-fire"></i> Dapur</a>
                            </li>
                        <?php } ?>

                        <?php if ($hasil['level'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark'; ?>"
                                    href="user"><i class="bi bi-card-checklist"></i> User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark'; ?>"
                                    href="report"><i class="bi bi-file-earmark-bar-graph"></i> Report</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>