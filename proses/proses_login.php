<?php
    session_start();
    include "connect.php";

    $username = (isset($_POST["username"])) ? htmlentities($_POST['username']) : "";
    $password = (isset($_POST["password"])) ? md5(htmlentities($_POST['password'])) : "";
    
    if (!empty($_POST['submit_validate'])){
        $query = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);

        if ($hasil){
            $_SESSION['username_kedai']= $username;
            $_SESSION['level_kedai']= $hasil['level'];
            header('location:../app/dashboard');
            exit();
        }else { ?>
            <script>
                alert('Username atau Password yang anda masukan salah');
                window.location.href='../app/login';
            </script>
        <?php
        exit();
        }
    }
    
?>