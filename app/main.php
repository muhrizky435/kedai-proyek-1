<?php

    if(empty($_SESSION['username_kedai'])){
        header('Location:login');
        exit();
    }
    $page = isset($page) ? $page : "Dashboard.php";

    include "../proses/connect.php";
    $query = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$_SESSION[username_kedai]'");
    $hasil = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Kedai-Wartiyem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>

    <!-- Header -->
    <?php include_once "Header.php" ?>
    <!-- End Header -->
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3 ">
                <!-- sidebar -->
                <?php include_once "Sidebar.php"; ?>
                <!-- End SideBar -->
                <!-- content -->
                <?php
                    include $page;
                ?>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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

</html>