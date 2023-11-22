<?php
    session_start();
    if(!empty($_SESSION['username_kedai'])){
        header('Location:login');
    }
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
                    include $page
                ?>
            </div>
        </div>
    </div>
</body>

</html>