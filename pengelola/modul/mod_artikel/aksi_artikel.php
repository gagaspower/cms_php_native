<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
$act=$_GET['act'];
if($act == 'simpan'){
$lokasi_file       = $_FILES['fupload']['tmp_name'];
$tipe_file         = $_FILES['fupload']['type'];
$nama_file         = $_FILES['fupload']['name'];
$acak              = rand(1,99);
$nama_file_unik    = $acak.$nama_file; 
$judul             = trim($val->validasi($_POST['judul'],'xss'));
$slug              = seotitle($judul);
$kategori          = $val->validasi($_POST['kategori_id'],'sql');
$isi               = stripslashes(htmlspecialchars($_POST['isi_berita'],ENT_QUOTES));
$deskripsi         = trim($val->validasi($_POST['meta_deskripsi'],'xss'));
$tgl_sekarang       = date('Ymd');
$jam_sekarang       = date('H:i:s');
//var_dump($pass);exit;
 
 // jika gambar tidak kosong
 if (!empty($lokasi_file)){
 // melakukan fungsi validasi upload gambar hanya boleh ekstensi jpg
 if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){

            echo " <script>document.location.href='?modul=artikel&status=7'";
            echo "</script>";
    }
    else{
    // panggil fungsi UploadProduk untuk memulai proses penyimpanan dan rezise
    UploadImage($nama_file_unik);
    $sql = mysql_query("INSERT INTO berita (kategori_id,user_id,judul,judul_seo,isi_berita,hari,tanggal,jam,gambar,tag,meta_deskripsi) 
                        VALUES 
                        ('".$kategori."','".$_SESSION['id_user']."','".$judul."','".$slug."','".$isi."','".$hari_ini."','".$tgl_sekarang."','".$jam_sekarang."','".$nama_file_unik."','".implode(',',$_POST['tag'])."','".$deskripsi."')");
    if($sql){
            echo " <script>document.location.href='?modul=artikel&status=2'";
            echo "</script>";
        }            
    else{
        echo " <script>document.location.href='?modul=artikel&status=1'";
            echo "</script>";
        }
    }
 }
 else{
    // jika gambar tidak di isi
    $sql = mysql_query("INSERT INTO berita (kategori_id,user_id,judul,judul_seo,isi_berita,hari,tanggal,jam,tag,meta_deskripsi) 
                        VALUES 
                        ('".$kategori."','".$_SESSION['id_user']."','".$judul."','".$slug."','".$isi."', '".$hari_ini."','".$tgl_sekarang."','".$jam_sekarang."','".implode(',',$_POST['tag'])."','".$deskripsi."')");
    echo " <script>document.location.href='?modul=artikel&status=2'";
            echo "</script>";
    }
} // proses simpan produk selesai 


elseif($act == 'edit'){
$lokasi_file       = $_FILES['fupload']['tmp_name'];
$tipe_file         = $_FILES['fupload']['type'];
$nama_file         = $_FILES['fupload']['name'];
$acak              = rand(1,99);
$nama_file_unik    = $acak.$nama_file; 
$id                = $val->validasi($_POST['id'],'sql');
$judul             = trim($val->validasi($_POST['judul'],'xss'));
$slug              = seotitle($judul);
$kategori          = $val->validasi($_POST['kategori_id'],'sql');
$isi               = stripslashes(htmlspecialchars($_POST['isi_berita'],ENT_QUOTES));
$deskripsi         = trim($val->validasi($_POST['meta_deskripsi'],'xss'));
$tgl_sekarang      = date('Ymd');
$jam_sekarang      = date('H:i:s');
//var_dump($pass);exit;
 
 // jika gambar tidak diubah
 if(empty($lokasi_file)){
 $sql = mysql_query("UPDATE berita 
                        SET
                        kategori_id   = '".$kategori."',
                        judul         = '".$judul."',
                        judul_seo     = '".$slug."',
                        isi_berita    = '".$isi."',
                        hari          = '".$hari_ini."',
                        tanggal       = '".$tgl_sekarang."',
                        jam           = '".$jam_sekarang."',
                        tag           = '".implode(',',$_POST['tag'])."',
                        meta_deskripsi= '".$deskripsi."'
                        WHERE 
                        id ='".$id."'");

    //jika update tanpa ganti gambar berhasil
    echo " <script>document.location.href='?modul=artikel&status=5'";
    echo "</script>";
    exit();
    }
    else{

    // validasi jika ekstensi gambar baru bukan tipe jpeg
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo " <script>document.location.href='?modul=artikel&status=3'";
    echo "</script>";
    exit();
    }

    else{
    // jika ekstensi gambar sudah sesuai, dan berganti gambar maka ambil gambar lama dari direktori berdasarkan id produk yang di kirimkan
    $data=mysql_fetch_array(mysql_query("SELECT gambar FROM berita WHERE id ='".$id."'"));
    unlink("../template/upload/featured_image/".$data['gambar']."");   
    unlink("../template/upload/featured_image/medium_".$data['gambar'].""); 
    unlink("../template/upload/featured_image/small_".$data['gambar'].""); 
    
     UploadImage($nama_file_unik);
    // setelah penghapusan gambar lama, langsung eksekusi proses penyimpanan
 $sql = mysql_query("UPDATE berita 
                        SET
                        kategori_id   = '".$kategori."',
                        judul         = '".$judul."',
                        judul_seo     = '".$slug."',
                        isi_berita    = '".$isi."',
                        hari          = '".$hari_ini."',
                        tanggal       = '".$tgl_sekarang."',
                        jam           = '".$jam_sekarang."',
                        gambar        = '".$nama_file_unik."',
                        tag           = '".implode(',',$_POST['tag'])."',
                        meta_deskripsi= '".$deskripsi."'
                        WHERE 
                        id ='".$id."'");
    echo " <script>document.location.href='?modul=artikel&status=5'";
    echo "</script>";
    exit();
        }
    }
} // proses update produk selesai
	
// proses hapus mulai
elseif($act == 'hapus'){

   $del = mysql_query("DELETE FROM berita WHERE id='".$val->validasi($_GET['id'],'sql')."'");
   if($del){
    echo "<script>document.location.href='?modul=artikel&status=6'";
    echo "</script>";
  }else{
    echo "<script>document.location.href='?modul=artikel&status=4'";
    echo "</script>";
  }
}

elseif($act == 'subscribe'){

    $sql2=mysql_query("SELECT * FROM berita WHERE id ='".$val->validasi($_GET['id'],'sql')."'");
    $a=mysql_fetch_array($sql2);
    $link = 'blog/detail/'.$a['judul_seo'].'/';

    $sql1=mysql_query("SELECT url_website FROM identitas");
    $i = mysql_fetch_array($sql1);
    
    $sql_mailer = mysql_query("SELECT * FROM phpmailer_seting");
    $m=mysql_fetch_array($sql_mailer);
    $host = $m['host'];
    $username=$m['username'];
    $password = $m['password'];
    $port=$m['port'];
    require '../config/PHPMailer/PHPMailerAutoload.php';
    $message = "<html>
                    <body style='font-size:14px';>
                        Hi...<br />
                        Yatoreh ada artikel baru lho<br />
                        Klik link dibawah ini untuk baca lebih lengkap :<br />
                        <h3><a href='".$i['url_website'].'/'.$link."'>".$a['judul']."</a></h3><br /><br />
                        Terima kasih sudah berlangganan.
                    </body>
                </html>";
        $subjek = "Yatoreh Update";
        $mail = new PHPMailer();
        $mail->SMTPDebug =0;
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username; // ganti dengan alamat gmail anda sendiri
        $mail->Password = $password;        // password email,
        $mail->SMTPSecure = 'tls';
        $mail->Port =$port;          
        $mail->SetFrom('pahlitamanata@gmail.com', 'Admin Yatoreh');  // email anda yang akan ditampilkan sebagai pengirim silahkan ganti
        $mail->AddReplyTo("admin@yatoreh.com","No Replay");  //email alternative anda.
        $mail->Subject    = $subjek;
        $mail->Body       = $message;
        $mail->AltBody    = $message;

        $sql55=mysql_query("SELECT * FROM subscribe");
        while($r=mysql_fetch_array($sql55)){
        $mail->AddAddress($r['email'],$r['nama']);   
        }   
        if(!$mail->send()) {
         echo "<script>document.location.href='?modul=artikel&status=24'";
         echo "</script>";
        }  
        else{
         echo "<script>document.location.href='?modul=artikel&status=25'";
         echo "</script>";            
        }          
    }
}
?>