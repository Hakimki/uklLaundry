<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit outlet</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from outlet where id_outlet='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="outlet_update.php">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="hidden" name="id" value="<?php echo $d['id_outlet']; ?>">
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Baru .." value="<?php echo $d['alamat_outlet']; ?>">
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="text" class="form-control" name="hp" placeholder="Masukkan no. hp baru .." value="<?php echo $d['hp_outlet']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
