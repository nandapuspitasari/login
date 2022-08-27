
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
          <a class="nav-link active" aria-current="page" href="index.php">Home |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- konten -->

 <div class="card mt-3 ms-3 me-3">
  <div class="card-home">
    <h5 class="card-title">Selamat Datang</h5>
    <p class="card-text">"Aplikasi ini merupakan aplikasi yang berisi tentang pengelolaan data akun Anda"</p>
    <img class="tengah" src="img/images.png" />
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