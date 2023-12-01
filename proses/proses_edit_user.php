<?php
include "connect.php";

$id = (isset($_POST["id"])) ? htmlentities($_POST['id']) : "";
$name = (isset($_POST["Nama"])) ? htmlentities($_POST['Nama']) : "";
$username = (isset($_POST["username"])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST["level"])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST["No_Hp"])) ? htmlentities($_POST['No_Hp']) : "";
$password = md5('password');

if (!empty($_POST['edit_user_validate'])) {
    $query = mysqli_query($koneksi, "UPDATE pengguna SET Nama='$name',username='$username',level='$level',No_Hp='$nohp' WHERE id='$id'");
    if ($query) {
        $message = '<script>alert("Data berhasil diupdate");
                    window.location="../app/User"</script>';
    } else {
        $message = '<script>alert("Data gagal diupdate")</script>';
    }
    echo $message;
}
?>
