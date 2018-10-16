
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<?php
error_reporting(0);
include "config/fungsi_kompresi.php";
ob_start("kompresi_output");    
session_start();
include "rss.php";
include "config/koneksi.php";
include "config/fungsi_tanggal.php";
include "config/fungsi_seo.php";
include "config/library.php";
include "config/class_paging.php";
include "config/fungsi_autolink.php";
$id = mysql_fetch_array(mysql_query("SELECT url_website,cache FROM identitas"));
if($id['cache']=='Y'){
    include "config/class_cache.php";
    AutoCache::Hash($_SERVER['REQUEST_URI']); //Buat cache baru
    AutoCache::PullOrPush(3600); //Cache dalam satuan detik, artinya 3600 detik = 1 jam
}
define('BASE_URL', 'http://labz1.yatoreh.com');
?>
    <title><?php include "dina_titel.php"; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo include "dina_meta2.php"; ?>">
    <meta name="description" content="<?php echo include "dina_meta1.php"; ?> ">
    <meta name="google-site-verification" content="<?php include "google_ver.php"; ?>" />
    <meta name="msvalidate.01" content="<?php include "bing_ver.php"; ?>" />
    <meta name="yandex-verification" content="<?php include "yandex_ver.php"; ?>" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="yatoreh.com">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <link href='favicon.ico' rel='icon' type='image/x-icon' />
    <!-- Facebook Open Graph --> 
    <meta property="og:type" content="blog" />
    <meta property="og:url" content="<?php include "dina_meta4.php"; ?>" /> 
    <meta property="og:title" content="<?php include "dina_titel.php"; ?>" />
    <meta property="og:image" content="<?php include "dina_meta3.php"; ?>" />
    <meta property="og:description" content="<?php include "dina_meta1.php"; ?>" />

    <!-- Google Plus Meta Tag -->  
    <meta itemprop="name" content="<?php include "dina_titel.php"; ?>" />
    <meta itemprop="description" content="<?php include "dina_meta1.php"; ?>" />
    <meta itemprop="image" content="<?php include "dina_meta3.php"; ?>" />

    <!-- Google Plus Photo -->  
    <link href='https://plus.google.com/' rel='author'/>
    <link href='https://plus.google.com/' rel='publisher'/>
    <link href="<?php echo BASE_URL;?>/template/front/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL;?>/template/front/css/sm-core-css.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.4.0/jssocials.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.4.0/jssocials-theme-flat.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL;?>/template/front/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL;?>/template/front/css/sweetalert.css" rel="stylesheet">

    <style type="text/css">
        img 
        {
            max-width:100%;
            height: auto;
        }           
    </style>
    </head>
    <body>
        <!-- Top Nav -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php 
                    $i = mysql_fetch_array(mysql_query("SELECT nama_website FROM identitas"));
                    ?>
                    <a class="navbar-brand" href="<?php echo BASE_URL;?>"><strong> <?php echo $i['nama_website'];?></strong></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php include "topmenu.php";?>
                </div>
            </div>
        </nav>

<div class="konten-web"><!-- KONTEN WEB -->
    <div class="row">  <!-- ROW -->
        <?php
       if(isset($_GET['module']))
        $module=$_GET['module'];
        switch ($module)
        {
        default:
        include "content/home.php";
        break;
        case "semuaartikel":
        include "content/semuaartikel.php";
        break;
        case "blogdetail":
        include "content/blogdetail.php";
        break;
        case "kategori":
        include "content/kategoridetail.php";
        break;
        case "static":
        include "content/statis.php";
        break;
        case "hubungi":
        include "content/kontak.php";
        break;
        case "kirim";
        include "content/aksihubungi.php";
        break;
        case "subscribe":
        include "content/aksisubscribe.php";
        break;
        // case "pencarian":
        // include "content/hasil_pencarian.php";
        // break;
        case "download":
        include "content/download.php"; 
        break;
        case "notfound":
        include "404.php";
        break;
        }
        ?>

</div> <!--ROW END-->
<!-- COPYRIGHT -->
<div class="copyright">
    <div class="container">
            <div class="sosmed">
                <a href="#" title="Facebook" target="blank"><i class="fa fa-facebook"></i></a>
                <a href="#" title="Instagram" target="blank"><i class="fa fa-instagram"></i></a>
                <a href="#" title="Google Plus" target="blank"><i class="fa fa-google-plus"></i></a>
                <a href="#" title="Youtube" target="blank"><i class="fa fa-youtube"></i></a>
                <a href="#" title="Linked In" target="blank"><i class="fa fa-linkedin"></i></a>
            </div>
                <p>Copyright &copy; <?php echo date('Y');?> - <a href="#"><?php $f=mysql_fetch_array(mysql_query("SELECT nama_website FROM identitas LIMIT 1"));
                echo $f['nama_website']; ?></a> All Right Reserved</p><br>
            <div class="sosmed">
                <?php
                $sql=mysql_query("SELECT * FROM mainmenu WHERE aktif='Y' AND posisi = 'footer' ORDER BY id ASC") or die("");
                $cek = mysql_num_rows($sql);
                if($cek > 0 ){ ?>
                <a href="<?php echo BASE_URL;?>">Home</a>  
                <?php
                while($r=mysql_fetch_array($sql)){ ?>

                | <a  href='<?php echo BASE_URL;?>/<?php echo $r['link'];?>'><?php echo $r['nama_menu'];?></a>  

                <?php
                } 
                }
                ?>
        </div>
    </div>
</div> <!--COPYRIGHT SELESAI-->
</div> <!-- KONTEN WEB SELESAI -->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->

<script src="<?php echo BASE_URL;?>/template/front/js/sweetalert.js"></script>
<script src="<?php echo BASE_URL;?>/template/front/js/frontend.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/template/front/js/jssocials.min.js"></script>
    <script type="text/javascript">
    $("#share1").jsSocials({
        shares: ["facebook", "googleplus", "whatsapp"]
    });
   </script>
</body>
</html>
<?php ob_end_flush(); ?>