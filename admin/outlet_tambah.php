<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class = "col-md=-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Outlet<h4>

            </div>
            <div class="panel-body">
                <form method = "post" action= "outlet_aksi.php">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type = "text" class = "form-control" name = "alamat" placeholder = "Masukkan alamat outlet..">

                    </div>
                    <form method = "post" action= "outlet_aksi.php">
                    <div class="form-group">
                        <label>HP</label>
                        <input type = "text" class = "form-control" name = "hp" placeholder = "Masukkan nomor hp outlet..">

</div>
                    <br/>
                    <input type = "submit" class="btn btn-primary" value="Simpan">
                
</form>
            </div>
        </div>
</div>
</div>
<?php include 'footer.php'; ?>