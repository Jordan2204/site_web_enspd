     
    
     <!-- jQuery -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- JQVMap -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/jquery-knob/jquery.knob.min.js"></script>
       <!-- FLOT CHARTS -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/flot/jquery.flot.js"></script>
      <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/flot-old/jquery.flot.resize.min.js"></script>
      <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/flot-old/jquery.flot.pie.min.js"></script>
     
      
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
      $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/sparklines/sparkline.js"></script>
      <!-- daterangepicker -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/moment/moment.min.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/sweetalert2/sweetalert2.min.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/toastr/toastr.min.js"></script>
      <!-- DataTables -->
      <script src="/vendor/AdminLTE-3.0.1/plugins/datatables/jquery.dataTables.js"></script>
      <script src="/vendor/AdminLTE-3.0.1/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <!-- AdminLTE App -->
      <script src="/vendor/AdminLTE-3.0.1/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="/vendor/AdminLTE-3.0.1/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="/vendor/AdminLTE-3.0.1/dist/js/demo.js"></script>
      
      <!-- page script -->
      <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });
        });
      </script>
      <script type="text/javascript">
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      </script>
       <!-- Pour l'editeur de code -->
         <script>
                 initSample();
        </script>  
        <script>
          $(function () {
            // Summernote
            $('.textarea').summernote()
          })
        </script>
        <!-- Pour la navbar -->
      <script src="/js/bootnavbar.js" ></script>
      <script>
        $(function () {
            $('#bootnavbar').bootnavbar();
        })

      </script>
      
    <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Mise a jour éffectuer.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

   //Alertes Perso******************************************
    //Doyen
      $('.toastrDefaultSuccess').click(function() {
        toastr.success('{!! session('ok') !!} ')
      });
     
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

    //Alertes Perso******************************************


 });

</script> 

<script type="text/javascript">
  $(document).ready(function (){
    document.getElementById("update").click();
  });

    /** add active class and stay opened when selected */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.nav-sidebar a').filter(function() {
      return this.href == url;
  }).addClass('active');

  // for treeview
  $('ul.nav-treeview a').filter(function() {
      return this.href == url;
  }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
   
</script>

