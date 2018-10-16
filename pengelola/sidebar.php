<aside class="main-sidebar">
  <section class="sidebar">
     <ul class="sidebar-menu" data-widget="tree">
        <li
        <?php 
        if($_GET['modul'] == 'home') { echo "class='active'"; }?>
        ><a href="?modul=home"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
        <li class="header">KOTAK MASUK</li>
        <li 
        <?php if($_GET['modul'] == 'pesan') { echo "class='active'"; }
           elseif($_GET['modul'] == 'balaspesan') { echo "class='active'"; }
        ?>>
            <a href="?modul=pesan">
                <i class="fa fa-envelope-o"></i><span>Pesan</span>
            </a>
        </li>
        <li
        <?php if($_GET['modul'] == 'newsletter') { echo "class='active'"; }
        ?>
        ><a href="?modul=newsletter"><i class="fa fa-envelope"></i><span>Mail News Letter</span></a></li>

        <li class="header">MANAJEMEN USER</li>
        <li
        <?php 
        if($_GET['modul'] == 'user') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahuser') { echo "class='active'"; }
        elseif($_GET['modul'] == 'edituser') { echo "class='active'"; } ?>
        ><a href="?modul=user"><i class="fa fa-users"></i> <span>User</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'grup') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahgrup') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editgrup') { echo "class='active'"; } ?>
        ><a href="?modul=grup"><i class="fa fa-lock"></i> <span>User Grup</span></a></li>

        <li class="header">PENGATURAN DASAR</li> 
        <li class="treeview
        <?php 
        if($_GET['modul'] == 'menuutama') { echo 'active'; }
        elseif($_GET['modul'] == 'tambahmenuutama') { echo 'active'; }
        elseif($_GET['modul'] == 'editmenuutama') { echo 'active'; } 
        elseif($_GET['modul'] == 'submenu') { echo 'active'; }
        elseif($_GET['modul'] == 'tambahsubmenu') { echo 'active'; }
        elseif($_GET['modul'] == 'editsubmenu') { echo 'active'; }
        ?>
        "><a href="#">
            <i class="fa fa-sitemap"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li 
        <?php 
        if($_GET['modul'] == 'menuutama') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahmenuutama') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editmenuutama') { echo "class='active'"; } 
        ?>
            ><a href="?modul=menuutama"><i class="fa fa-circle-o text-aqua"></i> <span>Menuutama</span></a></li>
            <li 
        <?php 
        if($_GET['modul'] == 'submenu') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahsubmenu') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editsubmenu') { echo "class='active'"; } 
        ?>
            ><a href="?modul=submenu"><i class="fa fa-circle-o text-aqua"></i> <span>Submenu</span></a></li>
          </ul>
        </li>


        <li class="treeview
        <?php 
        if($_GET['modul'] == 'pengaturan') { echo 'active'; }
        elseif($_GET['modul'] == 'mailer') { echo 'active'; }
        elseif($_GET['modul'] == 'sitemap') { echo 'active'; } 
        elseif($_GET['modul'] == 'seo') { echo 'active'; }
        elseif($_GET['modul'] == 'ads') { echo 'active'; }
        ?>
        "><a href="#">
            <i class="fa fa-cogs"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li
        <?php if($_GET['modul'] == 'pengaturan') { echo "class='active'"; }?>
        ><a href="?modul=pengaturan"><i class="fa fa-circle-o text-aqua"></i> <span>Pengaturan</span></a></li>
        <li
        <?php if($_GET['modul'] == 'mailer') { echo "class='active'"; }?>
        ><a href="?modul=mailer"><i class="fa fa-circle-o text-aqua"></i> <span>Konfigurasi Mailer</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'sitemap') { echo "class='active'"; }
        ?>
        ><a href="?modul=sitemap"><i class="fa fa-circle-o text-aqua"></i><span>Sitemap Generator</span></a></li>
        <li
        <?php if($_GET['modul'] == 'seo') { echo "class='active'"; }?>
        ><a href="?modul=seo"><i class="fa  fa-circle-o text-aqua"></i> <span>Search Engine Verifikasi</span></a></li>
        <li
        <?php if($_GET['modul'] == 'ads') { echo "class='active'"; }?>
        ><a href="?modul=ads"><i class="fa fa-circle-o text-aqua"></i> <span>Ads Manage</span></a></li>
          </ul>
        </li>

        <li class="header">KONTEN</li> 
        <li
        <?php 
        if($_GET['modul'] == 'kategori') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahkategori') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editkategori') { echo "class='active'"; } 
        ?>
        ><a href="?modul=kategori"><i class="fa fa-database"></i> <span>Kategori</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'tag') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahtag') { echo "class='active'"; }
        elseif($_GET['modul'] == 'edittag') { echo "class='active'"; } 
        ?>
        ><a href="?modul=tag"><i class="fa fa-tags"></i> <span>Tag Cloud</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'artikel') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahartikel') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editartikel') { echo "class='active'"; } 
        ?>
        ><a href="?modul=artikel"><i class="fa fa-newspaper-o"></i> <span>Artikel</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'halaman') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahhalaman') { echo "class='active'"; }
        elseif($_GET['modul'] == 'edithalaman') { echo "class='active'"; } 
        ?>
        ><a href="?modul=halaman"><i class="fa  fa-file-o"></i> <span>Halaman</span></a></li>
        <li class="header">MEDIA</li> 
        <li
        <?php 
        if($_GET['modul'] == 'file') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahfile') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editfile') { echo "class='active'"; } 
        ?>
        ><a href="?modul=file"><i class="fa fa-cloud-download"></i> <span>File</span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'database') { echo "class='active'"; }
        ?>
        ><a href="?modul=database"><i class="fa fa-database"></i> <span>Backup Database</span></a></li>
      </ul>
  </section>
</aside>