<?php
// Upload gambar untuk artikel
function UploadImage($fupload_name){
  //direktori gambar
  $vdir_upload = "../template/upload/featured_image/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //simpan ukuran ke thubmnail gambar homepage
  $dst_width = 330;
  $dst_height = 200;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "medium_" . $fupload_name);
  
    //simpan ukuran ke thubmnail gambar homepage
  $dst_width = 172;
  $dst_height = 80;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "small_" . $fupload_name);
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

// Upload gambar untuk artikel
function UploadLogo($fupload_name){
  //direktori gambar
  $vdir_upload = "../template/upload/website_logo/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefrompng($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Hapus gambar di memori komputer
  imagedestroy($im_src);

}


// Upload file untuk download file
function UploadFile($fupload_name){
  //direktori file
  $vdir_upload = "../template/upload/file/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

?>
