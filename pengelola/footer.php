<!-- jQuery 3 -->
<script src="../template/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../template/backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../template/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll -->
<!-- <script src="../template/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- DataTables -->
<script src="../template/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../template/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- tinyMce -->

<script src="../template/backend/dist/js/adminlte.min.js"></script>
<script src="../template/backend/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });

     $('#db_delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Peringatan',
                  text: 'Anda yakin akan menghapus database ini ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });

     $('#db_restore').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Peringatan',
                  text: 'Anda yakin akan menghapus database ini ?<br> Semua data baru anda akan terhapus.',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });

     $('#website_delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Peringatan',
                  text: 'Anda yakin akan menghapus backup website?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });

     $('#backup_full_website').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Peringatan',
                  text: 'Proses backup membutuhkan beberapa waktu. Mohon tunggu',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });

});
</script>

