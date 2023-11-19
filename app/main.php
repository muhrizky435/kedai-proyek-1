<<<<<<< HEAD:app/main.php

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Kedai-Wartiyem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Header -->
    <?php include_once "Header.php" ?>
    <!-- End Header -->
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3 ">
                <!-- sidebar -->
                <?php include_once "Sidebar.php"; ?>
            <!-- End SideBar -->
            <!-- content -->
                <?php 
                    include $page
                ?>
=======
<div class="col-12 col-md-4 col-lg-3">
    <h4><b>Order Makanan & Minuman</b></h4>
    <div class="card mt-3">
        <div class="card-body">
        <img src="../img/images.jpeg" alt="" srcset="">
            <h6 class="card-title">Kentang Goreng</h6>
            <p class="card-text">10.000</p>
            <th><a href="index.php?page=admin&action=add" class="btn btn-sm btn-primary"><i
                        class="fa-solid fa-plus"></i> Tambah</a></th>
>>>>>>> d77196e1a13f206fc1b5f2e3a9edeeff9587623b:admin/OMakanan.php
        </div>
    </div>
</div>
<div class="col-12 col-md-4 col-lg-3 ">
    <div class="card mt-5">
        <div class="card-body">
        <img src="../img/download.jpeg" alt="" srcset="" >
            <h6 class="card-title">Jus Alpukat</h6>
            <p class="card-text">12.000</p>
            <th><a href="index.php?page=admin&action=add" class="btn btn-sm btn-primary"><i
                        class="fa-solid fa-plus"></i> Tambah</a></th>
        </div>
    </div>
</div>
<div class="col-lg-3 mt-5">
    <div class="card" style="width: 20rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Data Pesanan</li>
            <li class="list-group-item">Kosong</li>
            <li class="list-group-item">Pilih No Meja</li>
            <th>
                <a href="index.php?page=admin&action=add" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i>Tambah</a>
            </th>
        </ul>
    </div>
</div>