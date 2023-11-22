<?php
if (isset($_GET['x']) && $_GET['x'] == 'dashboard') {
    $page = "Dashboard.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'transaksi') {
    $page = "Transaksi.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'orderMakanan') {
    $page = "OMakanan.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'orderMeja') {
    $page = "Omeja.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pengguna') {
    $page = "Pengguna.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    $page = 'logout';
    include "login.php";
} else {
    include "main.php";
}
?>