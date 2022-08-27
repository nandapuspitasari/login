<?php
include('koneksi.php');
session_start();
if($_SESSION["login"] != true){
  header("location:login.php");
}

$sql="SELECT * FROM tb_pendaftaran";
$query=mysqli_query($koneksi,$sql);
$jumlah=mysqli_num_rows($query);
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
</head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ACCOUN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="login.php">Login |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Sign Up |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tampil_data.php">Tampil Data</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

  <!-- konten -->
  <div class="card mt-5 ms-5 me-5" >
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Data Accoun</h5>

<hr>

    <table id="example" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Profil</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $no=1;
    foreach ($query as $tb_pendaftaran) {
    ?>

    <tr>
      <td><?php echo $no;?></td>
      <td><?php echo $tb_pendaftaran['username'];?></td>
      <td><?php echo $tb_pendaftaran['email'];?></td>
      <td><?php echo $tb_pendaftaran['password'];?></td>
      <td>
      <?php 
					if ($tb_pendaftaran['gambar'] == "") { 
      ?>
					<img src="img/" style="width:100px;height:100px;">
							<?php 
                }else{ 
              ?>
								<img src="<?php echo $tb_pendaftaran['gambar']; ?>" style="width:100px;height:100px;">
							<?php } ?>
    </td>
      <td>
      <a href="detail_data.php?id=<?php echo $tb_pendaftaran["id"];?>" class="btn btn-secondary">Detail</a>
      <a href="edit_data.php?id=<?php echo $tb_pendaftaran["id"];?>" class="btn btn-warning">Edit</a>
      <a href="delete_data.php?id=<?php echo $tb_pendaftaran["id"];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger">Delete</a>
  
      </td>
    
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>
</div>
</div>
 

<!-- footer -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.instagram.com/puspitasari1763/">Copyright &copy; | @nandapuspita</a>
  </div>
</nav>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>