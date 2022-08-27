<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM `tb_pendaftaran` WHERE (`id`='$id')";

mysqli_query($koneksi,$sql);

?>
<script>window.location.replace('tampil_data.php');</script>