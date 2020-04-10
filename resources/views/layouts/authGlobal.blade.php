<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PLATEFORME D'ADMINISTRATION DE LA FGI</title>

    @include('backend.include.style')
   
    <style type="text/css">
      [class*="col"] { margin-bottom: 20px; }
      img { width: 100%; }
      body { margin-top: 10px; }
  </style>
  

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
          <div class="text-center">
            <img src="/{{ session('iconeFGI')->chemin }}/{{ session('iconeFGI')->nom }}" alt="User profile picture" style="width: 110px; height: 110px;">
          </div>
        </div>
         @yield('content')
    </div>
   @include('backend.include.js')
</body>
</html>
