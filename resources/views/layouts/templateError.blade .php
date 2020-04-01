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
         {!! Html::style('css/bootstrap-4.0.0/bootstrap.min.css') !!}

       
         <!-- theme de bootsrap -->
       
         <!-- style css personnaliser-->
        {!! Html::style('css/style_global.css') !!}


       
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