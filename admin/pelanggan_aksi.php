<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$jeniskelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "insert into pelanggan values('','$nama','$hp','$jeniskelamin','$alamat')");
header("location:pelanggan.php");

?>