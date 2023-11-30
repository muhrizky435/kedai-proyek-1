<?php
include "../proses/connect.php";
$query = mysqli_query($koneksi, "SELECT * FROM pengguna");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah
                        User</button>
                </div>
                <div class="card-body">
                    <div class="row">
                    </div>
                    <!-- Modal tambah user baru -->
                    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreeen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="../proses/proses_input_user.php"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Your Name" name="Nama" required>
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput"
                                                        placeholder="name@example.com" name="username" required>
                                                    <label for="floatingInput">Username</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="level" required>
                                                        <option selected hidden values="0">Pilih Level User</option>
                                                        <option value="1">Admin/Owner</option>
                                                        <option value="2">Kasir</option>
                                                        <option value="3">Pelanggan</option>
                                                    </select>
                                                    <label for="floatingInput">Level User</label>
                                                    <label for="floatingInput">Level User</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Level User.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput"
                                                        placeholder="0831xxxxxxxx" name="No_Hp">
                                                    <label for="floatingInput">No HP</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" id="floatingInput"
                                                        placeholder="password" name="password" disabled value="1234">
                                                    <label for="floatingPassword">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_user_validate"
                                                value="1234">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir modal tambah user-->

                    <?php
                    foreach ($result as $row) {
                        ?>
                        <!-- Modal view-->
                        <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreeen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="../proses/proses_input_user.php"
                                            method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text" class="form-control" id="floatingInput"
                                                            placeholder="Your Name" name="Nama"
                                                            value="<?php echo $row['Nama']?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" name="username" value="<?php echo $row['username']?>">
                                                        <label for="floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Username.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                    <input disabled type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" name="username" value="
                                                            <?php 
                                                            if ($row['level']==1){
                                                                echo "Admin/Owner";
                                                            }elseif ($row['level']==2){
                                                                echo "Kasir";
                                                            }elseif ($row['level']==3){
                                                                echo "Pelanggan";
                                                            }
                                                            ?>">
                                                        <label for="floatingInput">Level User</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Level User.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="081xxxxx" name="No_Hp" value="<?php echo $row['No_Hp']?>">
                                                        <label for="floatingInput">No HP</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" id="floatingInput"
                                                            placeholder="password" name="password" disabled value="1234">
                                                        <label for="floatingPassword">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir View -->

                        <!-- modal edit -->
                        <div class="modal fade" id="Modaledit" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreeen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir Modal Edit -->

                        <!-- modal hapus -->
                        <div class="modal fade" id="Modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreeen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">hapus User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir Modal Hapus -->
                        <?php
                    }
                    if (empty($result)) {
                        echo "Data User tidak ada";
                    } else {

                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">No HP</th>
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
                                                <?php echo $row['Nama'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['level'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['No_Hp'] ?>
                                            </td>
                                            <td class="d-flex">
                                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalView"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#Modaledit"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#Modalhapus"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <script>
                (() => {
                    'use strict'
                    const forms = document.querySelectorAll('.needs-validation')

                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    }
                    )
                }
                )
            </script>