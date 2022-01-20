<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "pondok");

// mendapatkan id produk dari url

$id_pondok = $_GET["id"];

// query ambil data
$ambil = $koneksi->query("SELECT * FROM datapondok WHERE id_pondok='$id_pondok'");
$detail = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detail);
// echo "</pre>";

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">

    <title >Biodata</title>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" style="background: #13341A; height: 100px;">
        <div class="container">
            <a class="navbar-brand" href="#">Cari Pondok</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link mr-5" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="detail.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="#">Help</a>
            </li>
            <form action="" method="post" class="form-inline ml-4 my-2 my-lg-0">
                <input type="text" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                <button type="submit" name="cari" class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> Cari!</button>
            </form>
          </ul>
        </div>
         </div>
    </nav>

    <div class="lfoto jumbotron-fluid">
        <img src="foto_pondok/<?php echo $detail['foto_pondok']; ?>" alt="" class="ftpondok">
    </div>

    <div class="data">
        <div class="container">
            <div class="carddata p-5">
              <p class="pondok"><?php echo $detail['nama_pondok']; ?></p>
              <div class="row mt-4" style="color: white; size: 18px;" >
                <div class="col-1">
                  <i class="fas fa-map-marker-alt fa-2x" style="padding: 8px; color: #8A956B;"></i>
                </div>
                <div class="col-11">
                  <p class="lokasi"><?php echo $detail['alamat_pondok']; ?></p>
                </div>
              </div>

              <div class="row mt-2 mb-4">
                <div class="col-md-7">
                    <div class="cardsu">
                        <div class="card-body">
                          <p class="cjudul">Tentang Pondok</p>
                          <p class="isiket mt-4 p-4" align="justify"><?php echo $detail['deskripsi_pondok']; ?></p>
                        </div>
                      </div>
                </div>
                
                <div class="col-md-5">
                    <div class="cardsu">
                        <div class="card-body">
                          <p class="cdjudul">Pendiri Pondok</p>
                          <p class="pilar " > <?php echo $detail['pendiri_pondok']; ?></p>
                          <p class="cdjudul">Biaya Masuk Pondok</p>

                          <table class="table table-hover " style="background: #8A956B; color: white;">
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Biaya Masuk</td>
                                <td>Rp. <?php echo number_format($detail['uang_masuk']); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Biaya Bulanan</td>
                                <td>Rp. <?php echo number_format($detail['uang_bulanan']); ?></td>
                              </tr>
                            </tbody>
                          </table>

                          <p class="cdjudul">Kontak Admin Pondok</p>
                          <div class="row" style="color: white; size: 18px;" >
                            <div class="col-1">
                              <i class="far fa-phone-alt" style=" color: white;"></i>
                            </div>
                            <div class="col-11">
                              <p class="lokasi"><?php echo $detail['telepon_pondok']; ?></p>
                              <button type="button" class="btn btn-secondary" style="margin-left: 200px;">Daftar Pondok</button>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                </div>
              
            </div>
        </div>
    </div>

    
    

    <div class="footer2 ">
      <div class="container">
        <div class="row pt-5 pb-2">
            <div class="col text-center">
                <p>©2021. Syaifun Nadhif Maulana. All Rights Reserved. </p>
            </div>
        </div>
      </div>
    </div>

    



    








































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