<?php include 'header.php';?>
<div class="container">
    <div class="panel">
        <h4>Data Pelanggan</h4>
        
    </div>
    <div class="panel-body">
        <a href = "user_tambah.php" class ="btn btn-sm btn-info pull-right">Tambah</a>
        <br/>
        <br/>
        <table class ="table table-bordered table-striped">
            <tr>
                <th witdh = "1%">No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>role</th>
                <th witdh = "15%">OPSI</th>
</tr>
<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from admin");
$no = 1;
while($d=mysqli_fetch_array($data)){
    ?>
    <tr>

        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['role']; ?></td>

        <td>
            <a href = "user_edit.php?id=<?php echo $d['id']; ?>" class= "btn btn-sm btn-Info">Edit</a> 
            <a href = "user_hapus.php?id=<?php echo $d['id']; ?>" class= "btn btn-sm btn-danger">Hapus</a> 
</td>
</tr>
<?php
}       
?>
</table>
</div>   
    </div>
</div>

<?php include 'footer.php'; ?>