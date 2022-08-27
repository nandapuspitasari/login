<?php
include('koneksi.php');

$id=$_GET['id'];

$query="SELECT * FROM tb_pendaftaran WHERE id='$id'";

$sql = mysqli_query($koneksi,$query);

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>detail</title>

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
          <a class="nav-link" aria-current="page" href="#">Home |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Sign Up |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tampil_data.php">Tampil Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- konten -->
  <div class="card mt-5 ms-5 me-5" >
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Detail Accoun</h5>

<hr>
<?php
          foreach ($sql as $tb_pendaftaran) {
 ?>
          
<form action="" method="post">
    <div>
      <input type="text" name="id" id="id" value="<?php echo $tb_pendaftaran['id'];?>" hidden>
    </div>
  <div class="mb-3 row">
    <label for="inputtext" class="col-sm-2 col-form-label">Username</label>:
    <div class="col-sm-5">
      <input type="text" value="<?php echo $tb_pendaftaran['username'];?>" class="form-control" name="username" id="inputtext" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>:
    <div class="col-sm-5">
      <input type="email" value="<?php echo $tb_pendaftaran['email'];?>" class="form-control" name="email" id="inputemail">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputtext" class="col-sm-2 col-form-label">Password</label>:
    <div class="col-sm-5">
      <input type="text" value="<?php echo $tb_pendaftaran['password'];?>" class="form-control" name="password" id="inputext">
      <br>
      <a href="tampil_data.php" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
  </div>
</form>

<?php } ?>
    </div>
    </div>
</div>
</div>

<!-- footer -->
<nav class="navbar fixed-bottom navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.instagram.com/puspitasari1763/">Copyright &copy; | @nandapuspita</a>
  </div>
</nav>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>