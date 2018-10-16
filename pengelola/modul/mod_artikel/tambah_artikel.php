<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
?>
<div class="box-header with-border">
  <h3 class="box-title">Tambah Artikel</h3>
</div>
<form action="?modul=aksiartikel&act=simpan" enctype="multipart/form-data" method="post">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required="required" id="title">
              </div>
              <div class="form-group">
                <label>Konten</label>
                <textarea id="loko" name="isi_berita"></textarea>
              </div>
            </div>

          <div class="col-md-3">
           <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
            </div>
              <div class="form-group">
                 <select class="form-control" style="width: 100%;" name="kategori_id" required="" id="kategori_id">
                  <option></option>
                  <?php
                    $sql = mysql_query("SELECT * FROM kategori");
                    while($r=mysql_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $r['id'];?>"><?php echo $r['nama_kategori'];?></option>
                  <?php } ?>
                </select>
              </div>
          </div>
          <br>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Tag</h3>
            </div>
              <div class="form-group">
                  <?php
                    $sql = mysql_query("SELECT * FROM tag");
                    while($r=mysql_fetch_array($sql)){
                  ?>
                <label>
                  <input type="checkbox" class="minimal" name="tag[]" value="<?php echo $r['tag_seo'];?>">
                  <?php echo $r['nama_tag'];?>
                </label> <br>
                <?php } ?>
              </div>
          </div>
           <br>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Meta Deskripsi</h3>
            </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="meta_deskripsi"></textarea>
              </div>
          </div>
          <br>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Featured Image</h3>
            </div>
              <div class="form-group">
                <input type="file" class="form-control" name="fupload" >
              </div>
          </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='?modul=artikel'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info" id="simpan"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
<?php } ?>