<?php include 'header.php';?>
<div class="container">
    <div class="panel">
        <h4>Data Outlet</h4>
        
    </div>
    <div class="panel-body">
        <a href = "outlet_tambah.php" class ="btn btn-sm btn-info pull-right">Tambah</a>
        <br/>
        <br/>
        <table class ="table table-bordered table-striped">
            <tr>
                <th witdh = "1%">No</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>Aksi</th>
                
              
</tr>
<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from outlet");
$no = 1;
while($d=mysqli_fetch_array($data)){
    ?>
    <tr>

        <td><?php echo $no++; ?></td>
        <td><?php echo $d['alamat_outlet']; ?></td>
        <td><?php echo $d['hp_outlet']; ?></td>

        <td>
            <a href = "outlet_edit.php?id=<?php echo $d['id_outlet']; ?>" class= "btn btn-sm btn-info">Edit</a> 
            <a href = "outlet_hapus.php?id=<?php echo $d['id_outlet']; ?>" class= "btn btn-sm btn-danger">Hapus</a> 
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