<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
$data_admin=mysqli_fetch_assoc($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = $data_admin['role'];

    header("location:admin/index.php");

}else{
    header("location:index.php?pesan=gagal");

}
?>