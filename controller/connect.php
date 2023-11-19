<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "kedai_db";
    $koneksi = mysqli_connect($host, $user, $pass, $database);
    if (!$koneksi){
        echo "Gagal koneksi";
    }
?>