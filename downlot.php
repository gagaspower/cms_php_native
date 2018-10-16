<?php
include "config/koneksi.php"; 
$direktori = "template/upload/file/"; // folder tempat penyimpanan file yang boleh didownload
$filename = $val->validasi($_GET['file'],'xss');

if(file_exists($direktori.$filename)){
	$file_extension = strtolower(substr(strrchr($filename,"."),1));

	switch($file_extension){
	  case "pdf": $ctype="application/pdf"; break;
	  case "exe": $ctype="application/octet-stream"; break;
	  case "zip": $ctype="application/zip"; break;
	  case "rar": $ctype="application/rar"; break;
	  case "doc": $ctype="application/msword"; break;
	  case "xls": $ctype="application/vnd.ms-excel"; break;
	  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
	  case "gif": $ctype="image/gif"; break;
	  case "png": $ctype="image/png"; break;
	  case "jpeg":
	  case "jpg": $ctype="image/jpg"; break;
	  default: $ctype="application/proses";
	}

	if ($file_extension=='php'){
		echo "<script>
				setTimeout(function () { 
				 swal({
				            title: 'Access Forbiden',
				            text:  'File tidak tersedia.',
				            type: 'error',
				            timer: 1000,
				            showConfirmButton: true
				        });  
				 },10); 
				 window.setTimeout(function(){ 
				  window.location.replace('".BASE_URL."/download');
				 } ,1000);
        	 </script>";
	}
	else{
	  mysql_query("UPDATE download set hits=hits+1 where nama_file='".$filename."'");

	  header("Content-Type: octet/stream");
	  header("Pragma: private"); 
	  header("Expires: 0");
	  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	  header("Cache-Control: private",false); 
	  header("Content-Type: $ctype");
	  header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
	  header("Content-Transfer-Encoding: binary");
	  header("Content-Length: ".filesize($direktori.$filename));
	  readfile("$direktori$filename");
	  exit();   
	}
}else{
		echo "<script>
				setTimeout(function () { 
				 swal({
				            title: 'Access Forbiden',
				            text:  'File tidak tersedia.',
				            type: 'error',
				            timer: 1000,
				            showConfirmButton: true
				        });  
				 },10); 
				 window.setTimeout(function(){ 
				  window.location.replace('".BASE_URL."/download');
				 } ,1000);
        	 </script>";
}

?>
