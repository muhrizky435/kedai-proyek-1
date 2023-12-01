<nav class="navbar navbar-expand bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand text-light" href="dashboard">Kedai Wartiyem</a>
            <button class="navbar-toggler" type="button" data bs-toggle="collapse" data bs-target="#navbarNavDropdown" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbarNavDropdown-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link link-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo isset($hasil['username']) ? $hasil['username'] : 'Username'; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-house-door"></i> Home</a></li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>