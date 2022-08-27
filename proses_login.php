<?php
include('koneksi.php');
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tb_pendaftaran 
                        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if(mysqli_num_rows($result) > 0){
      $_SESSION["login"] = true;

      header("location:tampil_data.php");
}else{
      header("location:login.php");
}
?>
