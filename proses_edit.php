<?php
include('koneksi.php');

$id=$_POST['id'];
$user=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$gambar=$_FILES["gambar"]['name'];
$tmp_name = $_FILES["gambar"]['tmp_name'] ;

$cek="SELECT gambar FROM tb_pendaftaran WHERE id = '$id' ";
$result=mysqli_query($koneksi,$cek);
$cekImage= mysqli_fetch_array($result);


if ($cekImage['gambar'] != ''){

        unlink($cekImage['gambar']);
        
    }

$query="UPDATE `tb_pendaftaran` SET 
               `username`='$user', 
               `password`='$pass', 
               `email`='$email',
               `gambar`='$gambar'
                WHERE (`id`='$id') LIMIT 1";
                
$hasil=mysqli_query($koneksi,$query);                

 if($hasil && move_uploaded_file($tmp_name,$gambar))  {
    header('location:tampil_data.php');
 }
    

?>

<script>window.location.replace('tampil_data.php');</script>