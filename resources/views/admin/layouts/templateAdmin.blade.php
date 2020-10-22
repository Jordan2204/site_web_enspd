<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        @include('backend/include/style')
        
        <style type="text/css">
          [class*="col"] { margin-bottom: 20px; }
          img { width: 100%; }
          body { margin-top: 10px; }
        </style>
      
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Navbar -->
           @include('backend/admin/navbarAdmin')
         <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include('backend/admin/siderAdmin')
          <!-- Main Sidebar Container -->  

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('dashboard')</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">@yield('apresHome')</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
       
           <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

             @yield('content')

          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>

         @include('backend/include/footer')

       
      </div>
        @include('backend/include/js')
   </body>
</html>