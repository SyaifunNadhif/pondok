<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pondok</label>
        <input type="text" class="form-control" name="pondok" >
    </div>
    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" class="form-control" name="lokasi">
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" name="telepon">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>Uang Mausk</label>
        <input type="number" class="form-control" name="ugedung">
    </div>
    <div class="form-group">
        <label>Uang Bulanan</label>
        <input type="number" class="form-control" name="ubulan">
    </div>
    <div class="form-group">
        <label>Pendiri Pondok</label>
        <input type="text" class="form-control" name="pendiri">
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_pondok/" . $nama);
    $koneksi->query("INSERT INTO datapondok(nama_pondok,alamat_pondok,deskripsi_pondok,foto_pondok,telepon_pondok,uang_masuk,uang_bulanan,pendiri_pondok)
        VALUES('$_POST[pondok]','$_POST[lokasi]','$_POST[deskripsi]', '$nama', '$_POST[telepon]','$_POST[ugedung]', '$_POST[ubulan]','$_POST[pendiri]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    // echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>