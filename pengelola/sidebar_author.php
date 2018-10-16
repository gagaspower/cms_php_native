<aside class="main-sidebar">
  <section class="sidebar">
     <ul class="sidebar-menu" data-widget="tree">
        <li
        <?php 
        if($_GET['modul'] == 'home') { echo "class='active'"; }?>
        ><a href="?modul=home"><i class="fa fa-dashboard"></i> <span>Beranda<span></a></li>
        <li class="header">PENGATURAN DASAR</li> 
        <li
        <?php 
        if($_GET['modul'] == 'sitemap') { echo "class='active'"; }
        ?>
        ><a href="?modul=sitemap"><i class="fa fa-rss"></i><span>Sitemap Generator</span></a></li>
        <li class="header">KONTEN</li> 
        <li
        <?php 
        if($_GET['modul'] == 'tag') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahtag') { echo "class='active'"; }
        elseif($_GET['modul'] == 'edittag') { echo "class='active'"; } 
        ?>
        ><a href="?modul=tag"><i class="fa fa-tags"></i> <span>Tag Cloud<span></a></li>
        <li
        <?php 
        if($_GET['modul'] == 'artikel') { echo "class='active'"; }
        elseif($_GET['modul'] == 'tambahartikel') { echo "class='active'"; }
        elseif($_GET['modul'] == 'editartikel') { echo "class='active'"; } 
        ?>
        ><a href="?modul=artikel"><i class="fa fa-newspaper-o"></i> <span>Artikel<span></a></li>
      </ul>
  </section>
</aside>