<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Pelanggan Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>HP</label>
                        <input type="text" class="form-control" name="hp" placeholder="Masukkan no.hp ..">
                    </div>
                    
 
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat ..">
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" required="required">
                        <option value="">- Pilih Jenis Kelamin</option>
                        <option value = "Laki-laki">Laki-Laki</option>
                        <option value = "Perempuan">Perempuan</option>
                        <?php
                            $data = mysqli_query($koneksi,"select * from pelanggan");
                            while($d=mysqli_fetch_array($data)){
                                ?>
                                <option value="<?php echo $d['pelanggan_id']; ?>"><?php echo $d['jenis_kelamin']; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                       

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
