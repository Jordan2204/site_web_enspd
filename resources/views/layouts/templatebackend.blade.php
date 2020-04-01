<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('titre')</title>

        
         <!-- style css de boostrap -->
        {!! Html::style('css/bootstrap-3.3.7/bootstrap.min.css') !!}

        <!-- style css de boostrap nav-bar -->
        {!! Html::style('css/header_footer/style_hf.css') !!}


         <!-- theme de bootsrap -->
        {!! Html::style('css/bootstrap-3.3.7/bootstrap-theme.min.css') !!}

         <!-- style css personnaliser-->
        {!! Html::style('css/style_global.css') !!}


         <!-- plugins jQuery -->
        <script src="js/bootstrap-3.3.7/jquery-3.4.1.min.js"></script>

         <!-- fichier js  -->
        <script src="js/bootstrap-3.3.7/bootstrap.min.js"></script>

         <!-- Barre de navigation justifier -->
       {!! Html::style('css/en-tete_pieds/justified-nav.css') !!}

        <!--[if lt IE 9]>
            {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
            {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->

          <style type="text/css">
        [class*="col"] { margin-bottom: 20px; }
        img { width: 100%; }
        body { margin-top: 10px; }
      </style>
    </head>
    <body>
        <div class="container-fluid">
          @yield('contenu')
        </div>
    </body>
</html>