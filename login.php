<?php include('header.php');?>
<?php
include('koneksi.php');
if(isset($_POST['username'])){
  $user = $_POST['username'];
  $password = $_POST['password'];
  $data = mysqli_query($conn,"select * from admin where username='$user' and password='$password'");
  $cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:list-pegawai.php");
}else{
	header("location:login.php?pesan=gagal");
}
}

?>


<div class="container">
  <div class="card-body">
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
  </div>
  <div class="row">
  <form method="post">
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" name="username" id="user" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</body>
</html>
