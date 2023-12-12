<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "kedai_db";
    $conn = mysqli_connect($host, $user, "$pass", $database);
    if (!$conn){
        echo "Gagal koneksi".mysqli_connect_error();
    }
?>