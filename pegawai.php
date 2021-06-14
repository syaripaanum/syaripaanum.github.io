<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * from pegawai where id='$id'";
$data = mysqli_query($conn, $query);
?>
<?php include('header.php');?>
          <!-- /Breadcrumb -->
        <?php
        while($row = mysqli_fetch_array($data)){?>
<?php 
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
        
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= $row['nama'];?></h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm"><?= $row['alamat'];?></p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $row['nama'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $row['tanggal_lahir'];?>
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $row['jenkel'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $row['agama'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $row['alamat'];?>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <?php }
        ?>
        </div>
    </div>
    <?php include('footer.php');?>
