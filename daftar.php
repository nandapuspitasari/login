
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form|Daftar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
</head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ACCOUN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="daftar.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- konten -->
    <div class="global-container">
      <div class="card daftar-form">
        <div class="card-body">
          <h1 class="card-daftar text-center">SIGN UP</h1>
          <hr>
      </div>
        <div class="card-text">

        <form method="post" action="proses_daftar.php" enctype="multipart/form-data" >
        <input name="tujuan" type="hidden" value="LOGIN" >
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputText1"  placeholder="Enter Username">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password">
              <div class="mb-3">
              <label for="exampleInputFile1" class="form-label">Image</label>
              <input type="file" name="gambar" class="form-control" id="gambar">
              <p> Sudah punya akun?
           <a href="login.php">Login di sini</a>
           </p>

           
           
            </div>
            <!-- <div class="mb-3 form-check">
            <label for="checkbox" class="form-label">Remember me</label>
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div> -->
            <div class="d-grid"><button type="submit" name="save" class="btn btn-primary" >Sign Up</button>
          </div>
        </form>


        <?php
  
  if (isset($_POST['save'])){
    $fileName = $_FILES['gambar']['name'];
     // Simpan ke Database
     $sql = "insert into tb_pendaftaran (gambar) values ('$fileName', '".$_POST['gambar']."')";
     mysqli_query($koneksi, $sql);
     // Simpan di Folder Gambar
     move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
     echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>"; 
    } 
 ?>
 
        </div>
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