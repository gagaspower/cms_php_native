<?php
error_reporting(0);
//Deteksi hanya bisa diinclude, tidak bisa langsung dibuka (direct open)
if(count(get_included_files())==1){
    echo"<meta http-equiv='refresh' content='0; url=http://'".$_SERVER['HTTP_HOST']."'>"; 
    exit("Direct access not permitted.");
}
?>
<div class="row">
<div class="header2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2 class="animated bounceInLeft" style="font-size: 30px; padding: 2px; color: #fff;">SEMUA ARTIKEL</h2>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 20px;">
<div class="col-xs-12 col-md-9">
<?php
$query = mysql_query("SELECT berita.id, 
                             berita.judul,
                             berita.judul_seo, 
                             berita.user_id, 
                             berita.isi_berita,
                             berita.hari,
                             berita.tanggal, 
                             berita.dibaca, 
                             berita.tag, 
                             berita.meta_deskripsi, 
                             berita.gambar, 
                             berita.kategori_id, 
                             kategori.nama_kategori,
                             kategori.kategori_seo,
                             users.nama_lengkap 
                             FROM berita 
                             INNER JOIN kategori ON kategori.id = berita.kategori_id  
                             INNER JOIN users ON users.id = berita.user_id
                             ORDER BY berita.id DESC LIMIT 0,6");
$cek=mysql_num_rows($query);
if($cek < 1){
echo "<div class='alert alert-warning'>
        <strong>Oops...</strong> Halaman yang anda cari tidak ditemukan.
    </div>";
}else{
while($r=mysql_fetch_array($query)){
$tanggal = tgl_indo($r['tanggal']);
$isi_berita = htmlspecialchars_decode($r['isi_berita']); 
$isi = substr($isi_berita,0,100); 
$isi = substr($isi_berita,0,strrpos($isi," ")); 
$konten = html_entity_decode(strip_tags($isi));
?> 
                <!-- <div class="col-md-6 col-sm-12"> -->
                    <div class="col-xs-12 col-md-6">
                    <div class="thumbnail">
                        <a href="<?php echo BASE_URL;?>/blog/detail/<?php echo $r['judul_seo'];?>/">
                            <img src="<?php echo BASE_URL;?>/template/upload/featured_image/medium_<?php echo $r['gambar'];?>" style="width: 100%; display: block;" alt="<?php echo $r['judul'];?>">
                        </a>
                        <div class="caption">
                            <h1><a href="<?php echo BASE_URL;?>/blog/detail/<?php echo $r['judul_seo'];?>/"><?php echo $r['judul'];?></a></h1>
                            <p class="by-author">
                                <span class="text-primary"><i class="fa fa-calendar"></i></span>
                                <?php echo $r['hari'];?>, <?php echo $tanggal;?>&nbsp; 
                                <span class="text-primary"><i class="fa fa-calendar"></i></span> <?php echo $r['nama_lengkap'];?>
                            </p>
                            <p align="justify"><?php echo $konten;?></p>

                            <p>
                                <a href="<?php echo BASE_URL;?>/blog/detail/<?php echo $r['judul_seo'];?>/" class="btn btn-primary btn-sm" role="button">Selengkapnya <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
<?php }  } ?>
</div>

<!-- SIDEBAR  -->
<?php include "sidebar.php"; ?>
<!-- SIDEBAR END -->