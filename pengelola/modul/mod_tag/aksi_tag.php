<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
$act=$_GET['act'];
if($act == 'simpan'){
$nama  = trim($val->validasi($_POST['nama_tag'],'xss'));
$slug  = seotitle($nama);
//var_dump($pass);exit;
 $cek = mysql_num_rows(mysql_query("SELECT nama_tag FROM tag WHERE nama_tag = '".$nama."'"));
 if($cek > 0){
  echo " <script>document.location.href='?modul=tag&status=11'";
            echo "</script>";

 }
  else{ 
    $sql = mysql_query("INSERT INTO tag (nama_tag,tag_seo) VALUES ('".$nama."','".$slug."') ");
    if($sql){
            echo " <script>document.location.href='?modul=tag&status=2'";
            echo "</script>";
        }            
    else{
        echo " <script>document.location.href='?modul=tag&status=1'";
            echo "</script>";
        }
    }
 }// proses simpan produk selesai 


elseif($act == 'edit'){
$id = $val->validasi($_POST['id'],'sql');
$nama  = trim($val->validasi($_POST['nama_tag'],'xss'));
$slug  = seotitle($nama);
//var_dump($pass);exit;
$sql = mysql_query("UPDATE tag SET nama_tag='".$nama."',tag_seo = '".$slug."' WHERE id ='".$id."'");
if($sql){
        echo " <script>document.location.href='?modul=tag&status=2'";
        echo "</script>";
    }            
else{
    echo " <script>document.location.href='?modul=tag&status=1'";
        echo "</script>";
    }
}// proses simpan produk selesai 
	
// proses hapus mulai
  elseif($act == 'hapus'){
     $sql = mysql_query("DELETE FROM tag WHERE id='".$val->validasi($_GET['id'],'sql')."'");
     if($sql){
        echo "<script>document.location.href='?modul=tag&status=6'";
       echo "</script>";
    }else{
      echo "<script>document.location.href='?modul=tag&status=4'";
      echo "</script>";
      }
    }

}
?>