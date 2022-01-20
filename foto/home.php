<?php

require 'functions.php';

$perpustakaan = query("SELECT * FROM perpustakaan "); // ORDER BY id ASC // ASC untuk id terkecil // DESC untuk id terbesar



// tombol cari di tekan
if (isset($_POST["cari"])) {
    $perpustakaan = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="perpus.css">

    <!-- font viga -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navbar awal -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container ">
            <a class="navbar-brand text-warning">
                <img src="logoh.png" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy">
                <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="tambah.php">Tambah Buku</a>
                        <form action="" method="post" class="form-inline my-2 my-lg-0">
                            <input type="text" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                            <button type="submit" name="cari" class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Cari!</button>
                        </form>
                    </div>
                </div>
        </div>
    </nav>

    <!-- Navbar akhir -->
    <div class="container judul">
        <h2 class="alert  mt-4 text-white" style="text-align: center; ">
            DAFTAR BUKU
        </h2>
    </div>

    <div class="container">
        <div class="card-body mt-5">
            <table class="table table-dark table-hover table " style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($perpustakaan as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["judul_buku"]; ?></td>
                        <td><?= $row["pengarang"]; ?></td>
                        <td><?= $row["jumlah_halaman"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="
                        return confirm('apakah ada data yang ingin diubah?');" class="btn btn-primary badge-pill" style="width: 80px;">ubah</a> |
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                        return confirm('yakin ingin dihapus?');" class="btn btn-danger badge-pill" style="width: 80px;">hapus</a></button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>



    <footer class="lain">
        <div class="container ">
            <div class="row  py-4 mt-7">
                <div class="col text-center">
                    <!-- <i class="fa-2x fab fa-instagram-square text-primary mx-2"></i>
                    <i class="fa-2x fab fa-facebook-square text-primary mx-2"></i>
                    <i class="fa-2x fab fa-twitter-square text-primary mx-2"></i> -->
                    <h5>2020 Copyright Perpustakaan. All Rights Reserved</h5>
                </div>
            </div>
        </div>
    </footer>










































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>