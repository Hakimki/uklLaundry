</body>
</html>
<div class="form-group">
                        <label>Alamat</label>
                        <input type = "text" class = "form-control" name = "alamat" placeholder = "Masukkan alamat..">
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