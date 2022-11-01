<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="panel-body">
                <?php
                session_start();
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from pelanggan where pelanggan_id='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="pelanggan_update.php">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $d['pelanggan_id']; ?>">
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." value="<?php echo $d['pelanggan_nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp .." value="<?php echo $d['pelanggan_hp']; ?>">
                        </div>
                        <?php
                        if($_SESSION ['role'] == 'admin', 'kasir'){
                            ?>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." value="<?php echo $d['pelanggan_alamat']; ?>">
                        </div>
                        
                        <?php
                        }
                        if($_SESSION ['role'] == 'admin', 'kasir'){
                            ?>
                        <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" required="required">
                        <option value="">- Pilih Jenis Kelamin</option>
                        <option value = "Laki-laki">Laki-Laki</option>
                        <option value = "Perempuan">Perempuan</option>
                       
                            </select>
                        </div>
                        <?php
                        }
                        ?>
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
