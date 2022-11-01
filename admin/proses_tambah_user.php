<?php
 if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='user_tambah.php';</script>";
    } else {
        include '../koneksi.php';
        $insert=mysqli_query($koneksi,"insert into admin (nama, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='user_tambah.php';</script>";
        }
    }
}   
?>