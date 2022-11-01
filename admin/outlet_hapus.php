<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE from outlet where id_outlet='$id'");
header("location:outlet.php");

?>