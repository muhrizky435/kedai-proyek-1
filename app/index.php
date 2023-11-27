<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'dashboard') {
    $page = "Dashboard.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'transaksi') {
    $page = "Transaksi.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'orderMakanan') {
    $page = "OMakanan.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'orderMinuman') {
    $page = "OMinuman.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'User') {
    $page = "User.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
    $page = "Customer.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'kategori') {
    $page = "Kategori.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'DataMakanan') {
    $page = "Data.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    if( $_SESSION['level_kedai']==1){
        $page = "Report.php";
        include "main.php";
    }else{
        $page = "Dashboard.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    $page = 'logout';
    include "login.php";
} else {
    include "main.php";
} 
?>