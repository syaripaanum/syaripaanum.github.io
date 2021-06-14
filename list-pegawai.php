<?php
include('koneksi.php');
$query = "SELECT * FROM pegawai";
$hasil = mysqli_query($conn, $query);

?>

<?php include('header.php');?>
<div class="container pt-4">
<?php 
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<a href="add-pegawai.php"><button class="btn btn-success">Tambah Pegawai</button></a>
  <div class="row">
    <div class="col-md-6">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Agama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;
    while($row = mysqli_fetch_array($hasil)){?>
      <tr>
      <th scope="row"><?= $i?></th>
      <td><a href="pegawai.php?id=<?=$row['id'];?>"><?= $row['nama'];?></a></td>
      <td><?= $row['tanggal_lahir'];?></td>
      <td><?= $row['agama'];?></td>
      <td><?= $row['alamat'];?></td>
      <td><a href="edit-pegawai.php?id=<?=$row['id'];?>">Edit</a> | <a href="delete-pegawai.php?id=<?=$row['id'];?>">Hapus</a>
    </tr>
    <?php $i++;
  }?>
    
    
  	</tbody>
	</table>
</div>
</div>
</div>
<?php include('footer.php');?>
