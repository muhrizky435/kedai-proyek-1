<?php
include "../proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu
    LEFT JOIN tb_kategori_menu On tb_kategori_menu.id_kat_menu = tb_daftar_menu.kategori");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_kat_menu = mysqli_query($conn, "SELECT id_kat_menu,kategori_menu FROM tb_kategori_menu");
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Order
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Buat
                        Order</button>
                </div>
            </div>
            <!-- Modal Tambah Order Baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Order Makanan dan Minuman</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="../proses/proses_input_order.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="uploadFoto" name="kode_order"
                                                value="<?php echo date('ymdHi') . rand(100, 999) ?>" readonly>
                                            <label for="uploadFoto">Kode Order</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kode Order
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="meja" placeholder="Nomor Meja"
                                                name="meja" required>
                                            <label for="meja">Meja</label>
                                            <div class="invalid-feedback">
                                                Masukkan Meja
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pelanggan"
                                                placeholder="Nama Pelanggan" name="pelanggan" required>
                                            <label for="pelanggan">Nama Pelanggan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Pelanggan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input_order_validate" value="12345">Buat
                                Order</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah Order Baru-->
        <?php
        if (empty($result)) {
            echo "Data menu makanan atau minuman tidak ada";
        } else {
            foreach ($result as $row) { ?>

                <!-- Modal View-->

                <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Menu Makanan dan Minuman</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="../proses/proses_input_menu.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['nama_menu'] ?>">
                                                <label for="floatingInput">Nama Menu</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Menu
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['keterangan'] ?>">
                                                <label for="floatingPassword">Keterangan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select disabled class="form-select" aria-label="Default select example">
                                                    <option selected hidden value="">Pilih Kategori Menu</option>
                                                    <?php
                                                    foreach ($select_kat_menu as $value) {
                                                        if ($row['kategori'] == $value['id_kat_menu']) {
                                                            echo "<option selected value=" . $value['id_kat_menu'] . ">$value[kategori_menu]</option>";
                                                        } else {
                                                            echo "<option value=" . $value['id_kat_menu'] . ">$value[kategori_menu]</option>";
                                                        }

                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Kategori Makanan atau Minuman</label>
                                                <div class="invalid-feedback">
                                                    Pilih Kategori Makanan atau Minuman
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3" name="nohp">
                                                <input disabled type="number" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['harga'] ?>">
                                                <label for="floatingInput">Harga</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Harga Menu
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3" name="nohp">
                                                <input disabled type="number" class="form-control" id="floatingInput"
                                                    value="<?php echo $row['stok'] ?>">
                                                <label for="floatingInput">Stok</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Stok
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Modal View-->

                <?php
            }
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-nowrap">
                            <th scope="col">No</th>
                            <th scope="col">Foto Menu</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jenis Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $no++ ?>
                                </th>
                                <td>
                                    <div style="width: 150px;"> <img src="../img/<?php echo $row['foto'] ?>"
                                            class="img-thumbnail" alt="...">
                                </td>
                </div>
                </td>
                <td>
                    <?php echo $row['nama_menu'] ?>
                </td>
                <td>
                    <?php echo $row['keterangan'] ?>
                </td>
                <td>
                    <?php echo ($row['jenis_menu'] == 1) ? "Makanan" : "Minuman" ?>
                </td>
                <td>
                    <?php echo $row['kategori_menu'] ?>
                </td>
                <td>
                    <?php echo $row['harga'] ?>
                </td>
                <td>
                    <?php echo $row['stok'] ?>
                </td>

                <td>
                    <div class="d-flex">
                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                            data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                    </div>
                </td>
                </tr>
                <?php
                        }
                        ?>
            </tbody>
            </table>
        </div>
        <?php
        }
        ?>
</div>
</div>
</div>