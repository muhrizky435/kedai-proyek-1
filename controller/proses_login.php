<?php
    include "connect.php";

    $username = (isset($_POST["username"])) ? htmlentities($_POST['username']) : "";
    $password = (isset($_POST["password"])) ? md5(htmlentities($_POST['password'])) : "";
    
    if (!empty($_POST['submit_validate'])){
        $query = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if ($hasil){
            header('location:../app/dashboard');
        }else { ?>
            <script>
                alert('username atau Password yang anda masukan salah');
                window.location.href='../app/login';
            </script>
<?php
        }
    }
    
?>