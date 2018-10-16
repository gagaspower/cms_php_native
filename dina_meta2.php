<?php
error_reporting(0);
//Deteksi hanya bisa diinclude, tidak bisa langsung dibuka (direct open)
if(count(get_included_files())==1){echo"<meta http-equiv='refresh' content='0; url=https://$_SERVER[HTTP_HOST]'>"; exit("Direct access not permitted.");}
if (isset($_GET['judul_seo'])){
  $sql = mysql_query("select tag from berita where judul_seo='".$val->validasi($_GET['judul_seo'],'xss')."'");
  $j   = mysql_fetch_array($sql);
	echo "$j[tag]";
}
else{
      $sql2 = mysql_query("select meta_keyword from identitas LIMIT 1");
      $j2   = mysql_fetch_array($sql2);
		  echo "$j2[meta_keyword]";
}
?>

