<?php
include('koneksi.php');
if(isset($_POST) || $_SERVER['REQUEST_METHOD'] === 'POST'){
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $jenkel = $_POST['jenkel'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
$id = $_POST['id'];
    $query2 = "UPDATE pegawai SET nama='$nama', tanggal_lahir='$tgl_lahir', jenkel='$jenkel', agama='$agama', alamat='$alamat' WHERE id='$id'";
    if (mysqli_query($conn, $query2)) {
        header("Location:list-pegawai.php");
      } else {
        echo '<div class="alert alert-danger" role="alert">Data gagal disimpan<br/> '. $query2 . '<br>'. mysqli_error($conn).'</div>';
      }
}