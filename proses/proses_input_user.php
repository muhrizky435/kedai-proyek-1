<?php
include "connect.php";
$name = (isset($_POST["Nama"])) ? htmlentities($_POST['Nama']) : "";
$username = (isset($_POST["username"])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST["level"])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST["No_Hp"])) ? htmlentities($_POST['No_Hp']) : "";
$password = md5('password');

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($koneksi, "INSERT INTO pengguna (Nama,username,level,No_Hp,password) 
    values ('$name','$username','$level','$nohp','$password')");
    if(!$query){
        $message = '<script>alert("Data gagal dimasukan")</script>';
    }else{
        $message = '<script>alert("Data berhasil dimasukan");
                    window.location="../app/User"</script>
                    </script>';
    }
}echo $message;
?>