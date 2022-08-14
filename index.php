<?php

    require_once 'core.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHP Native Simple CRUD</title>

    <link href="assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="assets/theme/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php include('pages/layouts/_sidebar.php'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include('pages/layouts/_navbar.php') ?>

                <div class="container-fluid">

                    <?php

                    if(!isset($_GET['page'])){
                        include('pages/dashboard/index.php');
                    }

                    if(isset($_GET['page']) && $_GET['page'] == 'prodi'){

                        if(isset($_GET['mode'])){
                            if($_GET['mode'] == PAGE_MODE_CREATE || $_GET['mode'] == PAGE_MODE_EDIT){
                                include('pages/prodi/editor.php');
                            }
                        }
                        else {
                            include('pages/prodi/index.php');
                        }
                    }
                    elseif(isset($_GET['page']) && $_GET['page'] == 'mahasiswa'){

                        if(isset($_GET['mode'])){
                            if($_GET['mode'] == PAGE_MODE_CREATE || $_GET['mode'] == PAGE_MODE_EDIT){
                                include('pages/mahasiswa/editor.php');
                            }
                        }
                        else {
                            include('pages/mahasiswa/index.php');
                        }
                    }

                    ?>

                </div>

            </div>

            <?php include('pages/layouts/_footer.php') ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="assets/theme/vendor/jquery/jquery.min.js"></script>
    <script src="assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/theme/js/sb-admin-2.min.js"></script>
    <script src="assets/theme/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>