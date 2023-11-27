<nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
            style="width:250px">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kedai Wartiyem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-column nav-pills justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <!--Sidebar.php -->
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'dashboard' || !isset($_GET['x'])) ? 'active link-light' : 'link-dark'; ?>"
                            href="dashboard"><i class="bi bi-menu-button-wide"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'transaksi') ? 'active link-light' : 'link-dark'; ?>"
                            href="transaksi"><i class="bi bi-bag-check"></i> Transaksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active link-light' : 'link-dark'; ?>"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cart4"></i>
                            Order
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li><a class="dropdown-item" href="orderMakanan"><i class="bi bi-egg-fried"></i> Order Makanan</a></li>
                            <li><a class="dropdown-item" href="orderMinuman"><i class="bi bi-cup-straw"></i> Order Minuman</a></li>
                        </ul>
                    </li>
                    <h5>Kedai Wartiyem</h5>
                    <?php if($hasil['level']==1){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Makanan&Minuman') ? 'active link-light' : 'link-dark'; ?>"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-brilliance"></i>
                            Makanan & Minuman
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li><a class="dropdown-item" href="kategori">Kategori</a></li>
                            <li><a class="dropdown-item" href="DataMakanan">Data Makanan & Minuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'customer') ? 'active link-light' : 'link-dark'; ?>"
                            href="customer"><i class="bi bi-people-fill"></i> Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'User') ? 'active link-light' : 'link-dark'; ?>"
                            href="User"><i class="bi bi-people-fill"></i> User</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark'; ?>"
                            href="report"><i class="bi bi-gear-fill"></i> Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>