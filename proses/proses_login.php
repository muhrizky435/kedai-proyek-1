<?php
session_start();
include "connect.php";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "" ;
    if(!empty($_POST['submit_validate'])){
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if($hasil){
            $_SESSION['username_kedai'] = $username;
            $_SESSION['level_kedai'] = $hasil['level'];
            $_SESSION['id_kedai'] = $hasil['id'];

            header('location:../app/dashboard');
        }else{ ?>
            <script>
                alert('username atau password yang anda masukkan salah');
                window.location='../app/login'
            </script>
<?php
        }
    }
?>