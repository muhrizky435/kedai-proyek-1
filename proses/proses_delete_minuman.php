<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "" ;
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "" ;

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_minuman WHERE id = '$id'");
    if($query){
        unlink("../img/$foto");
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../app/DaftarMinuman"</script>';
    }else{
        $message = '<script>alert("Data gagal dihapus");
                    window.location="../app/DaftarMinuman"</script>';
    }
}echo $message;
?>