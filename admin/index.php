<?php

session_start();
$koneksi =  new mysqli("localhost", "root", "", "pondok");

// if (!isset($_SESSION['aadmin'])) {
//     echo "<script>alert('Anda Harus Login');</script>";
//     echo "<script>location='login.php';</script>";
//     header('location:login.php');

//     exit();
// }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a> 
            <a  href="index.php?halaman=produk"><i class="fa fa-dashboard fa-3x"></i> Data Pondok</a>
            <a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> Logout</a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
            Admin Cari Pondok &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <!-- /. NAV SIDE  -->
        <div id="wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "produk") {
                        include 'produk.php';
                    } elseif ($_GET['halaman'] == "tambahproduk") {
                        include 'tambahproduk.php';
                    } elseif ($_GET['halaman'] == "hapusproduk") {
                        include 'hapusproduk.php';
                    } elseif ($_GET['halaman'] == "ubahproduk") {
                        include 'ubahproduk.php';
                    } elseif ($_GET['halaman'] == "logout") {
                        include 'logout.php';
                    }
                } else {
                    include 'home.php';
                }



                ?>
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>