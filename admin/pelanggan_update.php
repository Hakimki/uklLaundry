<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
echo "update pelanggan set pelanggan_nama='$nama', pelanggan_hp='$hp',jenis_kelamin='$jeniskelamin', pelanggan_alamat='$alamat' where pelanggan_id='$id'";
mysqli_query($koneksi,"update pelanggan set pelanggan_nama='$nama', pelanggan_hp='$hp',jenis_kelamin='$jeniskelamin', pelanggan_alamat='$alamat' where pelanggan_id='$id'");
header("location:pelanggan.php");
?>
