<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('titre')</title>

       <!-- <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css"> -->
        <link rel="icon" type="image/x-icon" href="/{{ session('iconeFGI')->chemin }}/{{ session('iconeFGI')->nom }}">
      
         <!-- style css de boostrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-4.0.0/bootstrap.min.css') }}">

         <!-- style css personnaliser-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('css/style_global.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('css/mbootstrap4.min.css') }}">
        <!-- {!! Html::style('css/template_responsive.css') !!}-->

         <!-- Barre de navigation justifier -->
        <!--{!! Html::style('css/en-tete_pieds/justified-nav.css') !!}-->
        <link rel="stylesheet" href="{{ asset('/css/bootnavbar.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/vendor/AdminLTE-3.0.1/plugins/fontawesome-free/css/all.min.css">
       
        <!--[if lt IE 9]>
            {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
            {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->

        <style type="text/css">
           [class*="col"] { margin-bottom: 5px; }
            img { width: 100%; }
            body { 
              margin-top: auto;
              margin-left: auto;
             
             }
        </style>
    </head>
    <body>
        <!-- Debut de la page-->
        <div id="app" class="container-fluid">
         
          <!--header-->
          <div class="row"> 
            @include('frontend/header_footer/en_tete')
          </div>
          <!--header-->
         
            <!--corp de la page-->
            <div class="row">

              <!--Aside gauche
                <div  id="block-1" class="col-12 col-sm-12 col-md-3 col-lg-2 jumbotron ">
                  <div class="row">
                         @include('backend/include/siderGauche')
                  </div>
               </div>
              Aside gauche-->
           
               <!--Article : section principale-->
              <div id="block-1" class="col-12 col-sm-12 col-md-9 col-lg-10 ">
                 <div class="art-post">
                     <div class="art-postcontent clearfix">
                             @yield('section_principale')
                      </div>
                  </div>
              </div>
                <!--Article : section principale-->
           
                 
              <!--Aside droite-->
              <div id="block-2" class="col-12 col-sm-12 col-md-3 col-lg-2 jumbotron">
                <div class="row">
                      @include('backend/include/siderDroite')
                </div>
            </div>
            <!--Aside droite-->
          
          </div>
          <!--corp de la page-->
         
            <!--Autres ets de l'udo-->
          <div class="row">
             @include('backend.include.carousel_partenaire')
         </div>
          <div id="scrollUp">
              <a href="#top"><img style="width: 40px;height: 40px;" src="/storage/images/73e89hd9Pg.png"></a>
          </div>
          <!--Autres ets de l'udo-->
          <!--Inclusion du pieds de page-->
          <footer class="row art-footer">
            @include('frontend/header_footer/pieds_de_page')
         </footer>
          <!--Inclusion du pieds de page-->
    </div>
    <!-- Fin de la page-->
    

  <!-- plugins jQuery -->

    <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.sticky.js') }}"></script>


     <!-- fichier js  -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('/js/bootnavbar.js') }}" ></script>

   

    <script>
        $(function () {
            $('#bootnavbar').bootnavbar();
            $("#bootnavbar").sticky({topSpacing:0});
            $(window).scroll(function () {
                        if ($(this).scrollTop() > 200 ) { 
                            $('#scrollUp').css('right','10px');
                        } else { 
                            $('#scrollUp').removeAttr( 'style' );
                        }
 
                    });
        })
    </script>
   
        <script>window.jQuery || document.write('<script src="/vendor/bootstrap4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('/vendor/bootstrap-4.0.0/assets/js/vendor/popper.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('/vendor/bootstrap-4.0.0//assets/js/vendor/holder.min.js ') }}"></script>

</body>
</html>