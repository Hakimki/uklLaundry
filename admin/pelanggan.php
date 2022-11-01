<?php include 'header.php';?>
<div class="container">
    <div class="panel">
        <h4>Data Pelanggan</h4>
        
    </div>
    <div class="panel-body">
        <a href = "pelanggan_tambah.php" class ="btn btn-sm btn-info pull-right">Tambah</a>
        <br/>
        <br/>
        <table class ="table table-bordered table-striped">
            <tr>
                <th witdh = "1%">No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Hp</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th witdh = "15%">OPSI</th>
</tr>
<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from pelanggan");
$no = 1;
while($d=mysqli_fetch_array($data)){
    ?>
    <tr>

        <td><?php echo $no++; ?></td>
        <td><?php echo $d['pelanggan_id']; ?></td>
        <td><?php echo $d['pelanggan_nama']; ?></td>
        <td><?php echo $d['pelanggan_hp']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['pelanggan_alamat']; ?></td>

        <td>
            <a href = "pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class= "btn btn-sm btn-Info">Edit</a> 
            <a href = "pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class= "btn btn-sm btn-danger">Hapus</a> 
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