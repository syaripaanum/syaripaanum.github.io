<?php include('header.php');?>
<div class="container">
<?php
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
  <?php
include('koneksi.php');
if(isset($_POST['nama'])){
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $jenkel = $_POST['jenkel'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];

    $query = "INSERT INTO pegawai(nama, tanggal_lahir, jenkel, agama, alamat) VALUES('$nama','$tgl_lahir','$jenkel','$agama','$alamat')";
    if (mysqli_query($conn, $query)) {
        echo '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Data gagal disimpan<br/> '. $query . '<br>'. mysqli_error($conn).'</div>';
      }
}
?><br/>
<div class="row">
  <form method="POST">
  <div class="form-group">
    <label>Nama </label>
    <input type="text" name="nama" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenkel" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Agama</label>
    <input type="text" name="agama" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
<?php include('footer.php');?>