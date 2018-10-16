<?php
error_reporting(0);
//Deteksi hanya bisa diinclude, tidak bisa langsung dibuka (direct open)
if(count(get_included_files())==1){echo"<meta http-equiv='refresh' content='0; url=https://$_SERVER[HTTP_HOST]'>"; exit("Direct access not permitted.");}
?>
	
<?php
include "config/koneksi.php";
$sql = mysql_query("SELECT * FROM berita ORDER BY id DESC LIMIT 5");
$i=mysql_fetch_array(mysql_query("SELECT url_website FROM identitas"));

$file = fopen("rss.xml", "w");

fwrite($file, '<?xml version="1.0"?> 
<rss version="2.0"> 
<channel> 
<title>Ruangpojok Feed</title> 
<link>$i[url_website]</link> 
<description>Feed Description</description> 
<language>en-us</language>');

while($r=mysql_fetch_array($sql)){
  fwrite($file, "<item>
                 <title>$r[judul]</title>
                 <link>$i[url_website]/blog/detail/$r[judul_seo]/</link>
                 <description>$r[meta_deskripsi]</description>
                 </item>");
}

fwrite($file, "</channel></rss>");
fclose($file);
?>
