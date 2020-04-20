<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/{{ session('iconeFGI')->chemin }}/{{ session('iconeFGI')->nom }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    
    <div class="login-page">
        @yield('content')
        <div>
            <h3> <p align="center"><a href="/" >Revenir a la page d'accueil !</a></p></h3>

        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
     <!-- footer -->
    <footer align="center" >
         @include('backend.include.footer')
    </footer>
     <!-- footer -->
    
</body>
</html>
