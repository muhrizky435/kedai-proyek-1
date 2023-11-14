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
                        <a class="nav-link ps-2 
                        <?php echo (isset($_GET['x']) && $_GET['x']=='menu') ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="index.php?x=menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='dashboard') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=dashboard"><i class="bi bi-menu-button-wide"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='transaksi') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=transaksi"><i class="bi bi-bag-check"></i> Transaksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='order') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=order" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-cart4"></i>
                            Order
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li><a class="dropdown-item" href="index.php?x=orderMakanan">Order Makanan</a></li>
                            <li><a class="dropdown-item" href="index.php?x=orderMeja">Order Meja</a></li>
                        </ul>
                    </li>
                    <h5>Kedai Wartiyem</h5>
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>