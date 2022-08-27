<?php
include('koneksi.php');

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$gambar = $_FILES["gambar"]['name'];
$tmp_name = $_FILES["gambar"]['tmp_name'] ;

$confirm_password = $_POST['confirm_password'];
if($confirm_password==$password){

      $query_sql = "INSERT INTO `tb_pendaftaran` (`username`, `password`, `email`, `gambar`) VALUES (
                                '$username ', '$password', '$email', '$gambar')";

                  if (mysqli_query($koneksi, $query_sql) && move_uploaded_file($tmp_name,$gambar)) {
                  echo "<h1>Username $username berhasil terdaftar</h1>
                  <a href='login.php'>Kembali Login</h1>
                  ";
                  } else {
                  echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
                  }   
}else{
     header("location:daftar.php");
}
?>