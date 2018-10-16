<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
?>
<div class="box-header with-border">
  <h3 class="box-title">Ads Manajemen</h3>
</div>
<?php
$sql = mysql_query("SELECT * FROM ads_manage LIMIT 1");
$r = mysql_fetch_array($sql);
?>
<?php include "../config/status.php"; ?>
<form action="?modul=aksiads&act=update" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $r['id'];?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Setelah Artikel</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="ads_kode_artikel_bottom"><?php echo $r['ads_kode_artikel_bottom'];?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Sidebar Atas</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="ads_kode_sidebar_top"><?php echo $r['ads_kode_sidebar_top'];?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Sidebar Bawah</label>
                <div class="col-sm-8">
                 <textarea class="form-control" name="ads_kode_sidebar_bottom"><?php echo $r['ads_kode_sidebar_bottom'];?></textarea>
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
<?php } ?>