<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
?>
<div class="box-header with-border">
  <h3 class="box-title">Edit Artikel</h3>
</div>
<?php
function GetCheckboxes($table, $key, $Label, $Nilai='') {
  $s = "SELECT  * FROM  $table ORDER BY id ASC";
  $r = mysql_query($s);
  $_arrNilai = explode(',', $Nilai);
  $str = '';
  while ($w = mysql_fetch_array($r)) {
    $_ck = (array_search($w[$key], $_arrNilai) === false)? '' : 'checked';
    $str .= "<input type='checkbox' class='minimal' name='tag[]' value='$w[$key]' $_ck>$w[$Label]<br>";
  }
  return $str;
}
$sql = mysql_query("SELECT * FROM berita WHERE id = '".$val->validasi($_GET['id'],'sql')."'");
$r = mysql_fetch_array($sql);
?>
<form action="?modul=aksiartikel&act=edit" enctype="multipart/form-data" method="post">
  <input type="hidden" name="id" value="<?php echo $r['id'];?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control"  id="title" value="<?php echo $r['judul'];?>">
              </div>
              <div class="form-group">
                <label>Konten</label>
                <textarea id="loko" name="isi_berita"><?php echo $r['isi_berita'];?></textarea>
              </div>
            </div>

          <div class="col-md-3">
           <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
            </div>
              <div class="form-group">
                 <select class="form-control select2" style="width: 100%;" name="kategori_id" required="" id="kategori_id">
                  <option value="0">--pilih kategori--</option>
                  <?php
                    $sql = mysql_query("SELECT * FROM kategori");
                    while($k=mysql_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $k['id'];?>" <?php if($k['id'] == $r['kategori_id'] ) echo "selected"; ?>><?php echo $k['nama_kategori'];?></option>
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
                <label>
                    <?php
                    $d = GetCheckboxes('tag', 'tag_seo', 'nama_tag', $r['tag']);
                    echo "$d";
                    ?>
                </label>
              </div>
          </div>
           <br>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Meta Deskripsi</h3>
            </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="meta_deskripsi"><?php echo $r['meta_deskripsi'];?></textarea>
              </div>
          </div>
          <br>
              <div class="form-group">
                <?php   if($r['gambar'] != ''){
                echo "<img src='../template/upload/featured_image/small_".$r['gambar']."'/>"; 
                } else{

                  echo "Tidak ada gambar";
                }
                ?>
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