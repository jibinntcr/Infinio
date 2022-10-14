<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else { ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="Phoenixcoded" />
        <!-- Favicon icon -->
        <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

        <!-- vendor css -->
        <link rel="stylesheet" href="../assets/css/style.css">



    </head>

    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <?php include("../partials/nav.php") ?>
        <!-- [ Header ] start -->
        <?php include("../partials/header.php") ?>



        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Blog</h5>
                                </div>
                                <div class="apexcharts-toolbar">
                                    <button onclick="location.href = 'new-blog.php';" type="button" class="btn btn-success btn-icon-text">
                                        <i class="icon-circle-plus"></i>
                                        Create
                                    </button>
                                </div>
                                <!-- <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Blogs</h5>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tittle</th>
                                            <th>Creted Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <div class="mt-2">
                                                    <button type="button" onclick="location.href = 'blogactivate.php?idD=<?php echo $id ?>';" class="btn  btn-icon btn-danger"><i class="feather icon-slash"></i></button>
                                                </div>
                                            </td>

                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>

        <!-- Required Js -->
        <script src="../assets/js/vendor-all.min.js"></script>
        <script src="../assets/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="../assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="../assets/js/pages/dashboard-main.js"></script>
    </body>

    </html>
<?php }
?>