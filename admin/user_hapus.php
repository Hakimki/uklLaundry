
<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE from admin where id='$id'");
header("location:tampil_user.php");

?>
