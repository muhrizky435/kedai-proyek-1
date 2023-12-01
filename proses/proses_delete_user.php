<?php
include "connect.php";
$id = (isset($_POST["id"])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['delete_user_validate'])) {
    $query = mysqli_query($koneksi, "DELETE FROM pengguna WHERE id = '$id'");
    if ($query) {
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../app/User"</script>';
    } else {
        $message = '<script>alert("Data gagal dihapus")</script>';
    }
    echo $message;
}
?>
