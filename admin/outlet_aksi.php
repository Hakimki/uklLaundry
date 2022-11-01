<?php
include '../koneksi.php';
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
mysqli_query($koneksi, "insert into outlet values('','$alamat','$hp')");
header("location:outlet.php");

?>