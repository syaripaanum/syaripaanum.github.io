<?php
include('koneksi.php');
if($_GET['id']){
  $id = $_GET['id'];
  $query = "DELETE from pegawai where id='$id'";
  if(mysqli_query($conn, $query)){
    header("Location: list-pegawai.php");
  }else{ 
    echo "Data gagal dihapus";
  }
}