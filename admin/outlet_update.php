<?php
include '../koneksi.php';
$id = $_POST['id'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"update outlet set alamat_outlet='$alamat', hp_outlet='$hp' where id_outlet='$id'");
header("location:outlet.php");
?>