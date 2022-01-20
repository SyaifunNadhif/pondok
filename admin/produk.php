<h2>Data Semua Pondok di Indonesia</h2>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Pondok</th>
            <!-- <th>Lokasi</th> -->
            <th>Telepon</th>
            <th>Foto</th>
            <!-- <th>Deskripsi</th> -->
            <th>Uang Gedung</th>
            <th>Uang Bulanan</th>
            <th>Pendiri Pondok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomer = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM datapondok"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomer; ?></td>
                <td><?php echo $pecah['nama_pondok']; ?></td>
                <td><?php echo $pecah['telepon_pondok']; ?></td>
                <td>
                    <img src="../foto_pondok/<?php echo $pecah['foto_pondok']; ?>" width="100">
                </td>
                <td><?php echo $pecah['uang_masuk']; ?></td>
                <td><?php echo $pecah['uang_bulanan']; ?></td>
                <td><?php echo $pecah['pendiri_pondok']; ?></td>
                <td>
                <a  class="btn-danger btn">hapus</a>
                <a  class="btn-warning btn">ubah</a>
                </td>
            </tr>
            <?php $nomer++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>