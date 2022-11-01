<?php include 'header.php';
?>



<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah User Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="proses_tambah_user.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username ..">
                    </div>
                    
 
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukkan Password ..">
                        
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <?php 
        $arr_role=array('admin'=>'admin','kasir'=>'kasir');
        ?>
        <select name="role" class="form-control">
            <option></option>
            <?php foreach ($arr_role as $key_role => $val_role):
                if($key_role==$dt_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }
                ?>
            <option value="<?=$key_role?>" <?=$selek?>><?=$val_role?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <input type="submit" class="btn btn-primary" value="Simpan">

                </form>
            </div>
        </div>
    </div>
</div>

