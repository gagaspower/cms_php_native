<ul class="nav navbar-nav navbar-right">
  <?php
   $main=mysql_query("SELECT * FROM mainmenu WHERE aktif='Y' AND posisi = 'header'");
   $cek_main = mysql_num_rows($main);
   if($cek_main > 0 ){ ?>
    <li><a href="<?php echo BASE_URL;?>">Home</a></li>
   <?php
   }
   while($r=mysql_fetch_array($main)){ 
   $botm = mysql_num_rows(mysql_query("SELECT * FROM submenu WHERE main_id = '".$r['id']."' AND aktif ='Y'"));
   if($botm > 0){
    ?>
     <li><a href="<?php echo BASE_URL;?>/<?php echo $r['link'];?>"><?php echo $r['nama_menu'];?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
    	         $sub=mysql_query("SELECT * FROM submenu, mainmenu  
                                WHERE submenu.main_id=mainmenu.id 
                                AND submenu.main_id= '".$r['id']."' AND submenu.aktif='Y'");
               $count = mysql_num_rows($sub);
               if($count > 0 ){
    	         while($w=mysql_fetch_array($sub)){ ?>
                  <li><a href="<?php echo BASE_URL;?>/<?php echo $w['link_sub'];?>"><?php echo $w['nama_sub'];?></a></li>
              <?php } } ?>
          </ul>
      </li>
    <?php } else{ ?>
    <li><a href="<?php echo BASE_URL;?>/<?php echo $r['link'];?>"><?php echo $r['nama_menu'];?></a></li>
     <?php } } ?>  
</ul>


