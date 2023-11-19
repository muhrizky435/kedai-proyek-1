<?php
error_reporting(0);
switch ($_GET['action']) {
    default:
?>
<div class="col-lg-9 mt-3">
    <h4><b>Transaksi</b></h4>
    <table class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>Item</th>
            <th>Harga Satuan</th>
            <th>Qty</th>
            <th>Total</th>
            <th><a href="index.php?page=admin&action=add" class="btn btn-sm btn-primary"><i
                        class="fa-solid fa-plus"></i> Simpan</a></th>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM admin");
                ?>
            <?php while ($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td>
                    <a href="index.php?page=admin&action=edit&id=<?= $data['username']; ?>"
                        class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="index.php?page=admin&action=reset&id=<?= $data['username']; ?>"
                        class="btn btn-sm btn-info"><i class="fa-solid fa-arrow-rotate-right"></i></a>
                    <a href="index.php?page=admin&action=hapus&id=<?= $data['username']; ?>"
                        class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php
        break;
    case 'add':
    ?>
<form action="index.php?page=admin&action=save" method="post">
    <label for="user">Username:</label>
    <input type="text" name="user" id="user" class="form-control" required>
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass" class="form-control" required>
    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="nama" id="nama" class="form-control" required>
    <br>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
    <a href="index.php?page=admin" class="btn btn-danger">KEMBALI</a>
</form>
<?php
        break;
    case 'save':
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            $password = md5($_POST['password']);
            $nama = $_POST['nama'];
            $query = mysqli_query($koneksi, "INSERT INTO admin (username, password, nama) VALUES ('" . $user . "', '" . $password . "', '" . $nama . "')");

            if ($query) {
                echo "<script>
                        document.location='index.php?page=admin';
                    </script>";
            } else {
                echo "<script>
                        alert('Gagal');
                        document.location = 'index.php?page=admin&action=add';
                    </script>";
            }
        }
        break;
    case 'edit':
        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '" . $_GET['id'] . "'");
        $data = mysqli_fetch_assoc($query);
    ?>
<form action="index.php?page=admin&action=update" method="post">
    <input type="hidden" name="id" value="<?= $data['username']; ?>">
    <label for="user">Username:</label>
    <input type="text" name="user" id="user" class="form-control" disabled value="<?= $data['username']; ?>">
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass" class="form-control" disabled value="<?= $data['password']; ?>">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="nama" id="nama" class="form-control" required value="<?= $data['nama']; ?>">
    <br>
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <a href="index.php?page=admin" class="btn btn-danger">KEMBALI</a>
</form>
<?php
        break;
    case 'update':
        if (isset($_POST['id'])) {
            $nama = $_POST['nama'];
            $query = mysqli_query($koneksi, "UPDATE admin SET nama = '" . $nama . "' WHERE username = '" . $_POST['id'] . "'");

            if ($query) {
                echo "<script>
                        document.location='index.php?page=admin';
                    </script>";
            } else {
                echo "<script>
                        alert('Gagal');
                        document.location = 'index.php?page=admin&action=edit&id=" . $_POST['id'] . "';
                    </script>";
            }
        }
        break;
    case 'hapus':
        $query = mysqli_query($koneksi, "DELETE FROM admin WHERE username = '" . $_GET['id'] . "'");
        if ($query) {
            echo "<script>
                        document.location='index.php?page=admin';
                    </script>";
        } else {
            echo "<script>
                        alert('Gagal');
                        document.location = 'index.php?page=admin';
                    </script>";
        }
        break;
    case 'reset':
        $password = md5("12345");
        $query = mysqli_query($koneksi, "UPDATE admin SET password = '" . $password . "' WHERE username = '" . $_GET['id'] . "'");

        if ($query) {
            echo "<script>
                        alert('Sukses reset password 12345');
                        document.location='index.php?page=admin';
                    </script>";
        } else {
            echo "<script>
                        alert('Gagal');
                        document.location = 'index.php?page=admin';
                    </script>";
        }

        break;
}
?>