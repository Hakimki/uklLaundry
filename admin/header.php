<!DOCTYPE html>
<html>
<head>
<title>Dashboard Laundry</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <nav class="navbar navbar-inverse" style="border-radius: 0px">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Fahmi Laundry</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
    <?php
    if($_SESSION['role'] == 'admin'){
       ?> 
    <li><a href="tampil_user.php"><i class="glyphicon glyphicon-eye-open"></i> User</a></li>
    <li><a href="outlet.php"><i class="glyphicon glyphicon-leaf"></i> Outlet</a></li>
    <?php
    }
    ?>
    <li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
    <li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="harga.php"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>    
        <li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
    </ul>
    </li>
    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

  

    
 

    <li><p class="navbar-text">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p></li>
    
    </ul>
    </div>
    </div>
    </nav>

    </body>    
</html>


