<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * from pegawai where id='$id'";
$data = mysqli_query($conn, $query);
?>

<?php include('header.php');?>
<div class="container">
<?php 
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<?php

if(isset($_POST['nama'])){
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $jenkel = $_POST['jenkel'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
$id = $_POST['id'];
    $query2 = "UPDATE pegawai SET nama='$nama', tanggal_lahir='$tgl_lahir', jenkel='$jenkel', agama='$agama', alamat='$alamat' WHERE id='$id'";
    if (mysqli_query($conn, $query2)) {
        echo '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Data gagal disimpan<br/> '. $query2 . '<br>'. mysqli_error($conn).'</div>';
      }
}
?><br/>
  <div class="row">
  <?php
        while($row = mysqli_fetch_array($data)){?>
  <form method="POST">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama </label>
    <input type="text" class="form-control" name="nama" value="<?= $row['nama'];?>"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tanggal_lahir'];?>"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label>
    <input type="text" class="form-control" name="jenkel" value="<?= $row['jenkel'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Agama</label>
    <input type="text" class="form-control" name="agama" value="<?= $row['agama'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'];?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<?php }
        ?>
    </div>
</div>
<?php include('footer.php');?>
