<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "pondok");



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
              <a class="nav-link mr-5" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="detail.html">About</a>
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

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="lead">Sebuah Website <br><br><br>Untuk Memudahkan Mencari <br><br><br>Pondok Untuk Anaknya</p> <br>
          <table class="table table-hover " style="background: #8A956B; color: white; margin-top: 30px; width: 1000px;" align="center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Pondok</th>
                <th scope="col">Pendiri Pondok</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
            <?php $nomer = 1; ?>
            <?php $ambil = $koneksi->query("SELECT * FROM datapondok"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
              <tr>
                <th scope="row"><?php echo $nomer; ?></th>
                <td style="width: 300px;"><?php echo $pecah['nama_pondok']; ?></td>
                <td style="width: 600px;"><?php echo $pecah['alamat_pondok']; ?></td>
                <td style="width: 100px;"><a href="detail.php?id=<?php echo $pecah['id_pondok']; ?>" class="btn mt-2">Cek</a></td>
              </tr>
              <?php $nomer++; ?>
            <?php } ?>
            </tbody>
          </table>
        </div>
    </div>

    <div class="kotak">
      <div class="container">
        <div class="favorit">
          <p>10 Pondok Terbaik</p>
        </div>
      <!-- grid card -->
      <div class="row mt-4 mb-4">
        
          <div class="col-md">
              <div class="card mr-2 ">
                  <div class="card-body">
                      <p class="card-judul">Pondok Modern Selamat Kendal</p>

                      <div class="row">
                        <div class="col">
                          <div class="bintang ">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                          </div>
    
                          <p class="letak"> Jl. Raya Soekarno-Hatta No.Km 3, Gondoarum, 
                            Jambearum, Kec. Patebon, Kabupaten Kendal, Jawa Tengah 51351</p>
                            <p class="keterangan" align="justify" >Pondok Pesantren Modern Selamat Kendal merupakan pondok yang berdiri dibawah Yayasan Wakaf Selamat Rahayu Kendal. Sebagai pondok yang mengutamakan pendidikan akademik dan religi, maka sistem pengajaran yang digunakan menggunakan dua kurikulum yaitu dari Pendidikan Nasional dan Departemen Agama. Saat ini, jumlah santri pondok kurang lebih 3000 orang.</p>
                        </div>
                        <div class="col mt-4">
                          <img src="img/slmet.jpg" alt="" width="220px" height="150px">
                        </div>
                    </div>

                  </div>
                </div>
          </div>
          <div class="col-md">
              <div class="card ml-2 ">
                  <div class="card-body ">
                    <p class="card-judul">Pondok Modern Selamat Batang</p>
                    <div class="row">
                      <div class="col">
                        <div class="bintang ">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half-alt text-warning"></i>
                          <i class="far fa-star text-warning"></i>
                        </div>
                        <p class="letak"> Jl. Nasional 1, Gondangsari, Clapar, Kec. Subah, Kabupaten Batang, Jawa Tengah 51262</p>
                        <p class="keterangan" align="justify">Pondok Pesantren Modern Selamat Batang merupakan pondok yang berdiri dibawah Yayasan Wakaf Selamat Rahayu Kendal. Sebagai pondok yang mengutamakan pendidikan akademik dan religi, maka sistem pengajaran yang digunakan menggunakan dua kurikulum yaitu dari Pendidikan Nasional dan Departemen Agama. Saat ini, jumlah santri pondok kurang lebih 2000 orang.</p>
                      </div>
                      <div class="col mt-4">
                        <img src="img/PONPES.jpg" alt="" width="220px" height="150px">
                      </div>
                  </div>
                </div>
          </div>
      </div>
    </div>
    </div>
    

    <div class="footer ">
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