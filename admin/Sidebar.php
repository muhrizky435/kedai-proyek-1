<nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
    <div class="container-fluid">
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
                        <a class="nav-link active link-light ps-2" aria-current="page" href=".">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark ps-2" href="Dashboard.php"><i class="bi bi-menu-button-wide"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark ps-2" href="Transaksi.php"><i class="bi bi-bag-check"></i> Transaksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-2" href="Order.php" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-cart4"></i>
                            Order
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li><a class="dropdown-item" href="OMakanan.php">Order Makanan</a></li>
                            <li><a class="dropdown-item" href="Omeja.php">Order Meja</a></li>
                        </ul>
                    </li>
                    <h5>Kedai Wartiyem</h5>
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>