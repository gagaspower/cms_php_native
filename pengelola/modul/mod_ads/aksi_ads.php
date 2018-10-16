<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
$act=$_GET['act'];
if($act == 'update'){
$id =   $val->validasi($_POST['id'],'sql');
$artikel  = stripslashes(htmlspecialchars($_POST['ads_kode_artikel_bottom'],ENT_QUOTES));
$sidebar_atas = stripslashes(htmlspecialchars($_POST['ads_kode_sidebar_top'],ENT_QUOTES));
$sidebar_bawah = stripslashes(htmlspecialchars($_POST['ads_kode_sidebar_bottom'],ENT_QUOTES));

$sql = mysql_query("UPDATE ads_manage SET ads_kode_artikel_bottom='".$artikel."',ads_kode_sidebar_top='".$sidebar_atas."',ads_kode_sidebar_bottom='".$sidebar_bawah."' WHERE id ='".$id."'");
if($sql){
        echo " <script>document.location.href='?modul=ads&status=2'";
        echo "</script>";
    }            
else{
    echo " <script>document.location.href='?modul=ads&status=1'";
        echo "</script>";
    }
    }
 }
?>