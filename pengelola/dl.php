<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}
else{

$direktori = '../'; // folder tempat penyimpanan file yang boleh didownload
$filename = 'personal.zip';

if(file_exists($direktori.$filename)){ //mencegah LFD (Local File Disclore)
$file_extension = strtolower(substr(strrchr($filename,"."),1));

	switch($file_extension){
	  case "zip": $ctype="application/zip"; break;
	  case "rar": $ctype="application/rar"; break;
	  default: $ctype="application/proses";
	}
	if ($file_extension=='php'){
	  echo "<h1>Access forbidden!</h1>
			<p>Maaf, file yang Anda download sudah tidak tersedia atau filenya (direktorinya) telah diproteksi.</p>";
	  exit;
	}
	else{
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
}
else{
	echo "Maaf, file yang Anda download sudah tidak tersedia";
	exit;
}
}
?>