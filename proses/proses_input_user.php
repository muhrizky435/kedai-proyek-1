<?php
include "connect.php";
$name = (isset($_POST["nama"])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST["username"])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST["level"])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST["nohp"])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST["alamat"])) ? htmlentities($_POST['alamat']) : "";

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($koneksi, "INSERT INTO user (nama,username,level,nohp,alamat) value ('$name','$username','$level','$nohp','$alamat')");
    if(!$query){
        $massage = '<script>alert("Data gagal dimasukan")</script>';
    }else{
        $massage = '<script>alert("Data berhasil dimasukan");
                    window.location="../user"</script>
                    </script>';
    }
}echo $massage;
?>