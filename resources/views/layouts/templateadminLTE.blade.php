<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../AdminLTE-3.0.1/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



         <!-- plugins jQuery -->
       <!-- <script src="js/bootstrap-3.3.7/jquery-3.4.1.min.js"></script>-->

         <!-- fichier js  -->
       <!-- <script src="js/bootstrap-3.3.7/bootstrap.min.js"></script>-->

        
          <style type="text/css">
        [class*="col"] { margin-bottom: 20px; }
        img { width: 100%; }
        body { margin-top: 10px; }
      </style>
    </head>
    <body>

      
          @yield('content')


          <!-- Scripts -->
     <script src="/js/app.js"></script>
     <!-- jQuery -->
      <script src="../AdminLTE-3.0.1/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="../AdminLTE-3.0.1/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
      $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="../AdminLTE-3.0.1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="../AdminLTE-3.0.1/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="../AdminLTE-3.0.1/plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="../AdminLTE-3.0.1/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="../AdminLTE-3.0.1/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="../AdminLTE-3.0.1/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="../AdminLTE-3.0.1/plugins/moment/moment.min.js"></script>
      <script src="../AdminLTE-3.0.1/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="../AdminLTE-3.0.1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="../AdminLTE-3.0.1/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="../AdminLTE-3.0.1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../AdminLTE-3.0.1/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="../AdminLTE-3.0.1/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../AdminLTE-3.0.1/dist/js/demo.js"></script>
   </body>
</html>