<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('titre')</title>

        <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
        <link rel="icon" type="image/x-icon" href="/{{ session('iconeFGI')->chemin }}/{{ session('iconeFGI')->nom }}">
      
         <!-- style css de boostrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-4.0.0/bootstrap.min.css') }}">

         <!-- style css personnaliser-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('css/style_global.css') }}">
        <!-- {!! Html::style('css/template_responsive.css') !!}-->

         <!-- Barre de navigation justifier -->
        <!--{!! Html::style('css/en-tete_pieds/justified-nav.css') !!}-->
        <link rel="stylesheet" href="{{ asset('/css/bootnavbar.css') }}">
      

        <!--[if lt IE 9]>
            {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
            {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->

        <style type="text/css">
            [class*="col"] { margin-bottom: auto; }
            img { width: 100%; }
        </style>
    </head>
    <body>
          <div id="app">
             <!--Inclusion de l'en-tête-->
            <div> 
                  @include('frontend/header_footer/en_tete')

            </div>

           
            <!--corp de la page-->
             <div class="container-fluid">
                <div class="row">
                  <!--Aside gauche-->
                    <div  id="block-1" class="col-12 col-sm-3 col-md-2 art-layout-cell art-sidebar2"  style="border:1px solid blue;">
                      <div class="row">
                              <!--Image du doyen-->
                             <p>&nbsp;</p>
                            @if( url()->current() == 'http://fgi-udo.local') 
                              <div class="col-5 col-sm-12 col-lg-12">
                                <div class="art-blockcontent">
                                  <p align="center"><strong>LE {{ strtoupper(session('doyen')->postePers) }}</strong></p>
                                  <p><img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" class="img-fluid" ></p>
                                  <p><img src="/{{ session('doyen')->chemin }}/{{ session('doyen')->nom }}" class="img-fluid img-thumbnail"></p>
                                  <p style="text-align: center;">{{ session('doyen')->gradePers }} {{ session('doyen')->nomPers }} {{ session('doyen')->prenomPers }}</p>
                                </div>
                               </div>
                            @endif
                            <div class="col-5 col-sm-12 col-lg-12">
                              <div class="art-block clearfix">
                                <div class="art-blockcontent">
                                  <div class="custom">
                                   <p style="text-align: center;"><a href="http://webmail.fgi-udo.cm/" target="_blank" rel="noopener "><img src="/storage/images/oyZW4otOad.png" width="30" height="31" style="border: 1px none rgb(0, 0, 0); margin: 0px; width: 100%; max-width: 30px; height: auto;"></a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6 col-sm-12 col-lg-12">
                              <div class="art-vmenublock clearfix">
                                <div class="art-vmenublockcontent">
                                <ul class="art-vmenu nav-bar">
                                  <li class="nav-item"><a href="/dossiersPartenairesNA">Suivre mon Dossier
                                  </a>
                                  </li>
                                   <li class="nav-item"><a href="/communiquerNA/3">A l'attention des Etudiants</a>
                                  </li>
                                   <li class="nav-item"><a href="/communiquerNA/2">A l'attention du Public <span class="badge badge-danger">!</span></a>
                                  </li>
                                    <li class="nav-item"><a href="http://fgi-udo.local/#">Pièces à télécharger</a>
                                    </li>
                                   <!--  communiquer :::::{{ session('comPU') }} ::::::<li class="nav-item dropdown"><a href="http://fgi-udo.cm/#">Les Calendriers académiques</a><ul><li class="item-214"><a href="">Le calendrier général de l'UDo</a></li><li class="nav-item"><a href="">La calendrier de la FGI</a></li><li class="item-216"><a href="">Le calendrier des examens</a></li></ul>
                                  </li> -->
                                  <!-- <li class="nav-item dropdown"><a>Communiqués</a><ul><li class="item-153"><a href="">A l'attention des Etudiants</a></li><li class="item-145"><a href="">A l'attention du Public</a></li></ul>
                                  </li> -->
                                 <!--  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Communiqués</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown08">
                                    <li><a class="dropdown-item" href="">La FGI en Bref</a></li>
                                    <li><a class="dropdown-item" href="/adminCent">L'ADMINISTRATION CENTRALE</a></li>
                                    <li><a class="dropdown-item" href="/">POURQUOI CHOISIR LA FGI ?</a></li>
                                  </ul>
                                </li>  -->

                                </ul>
                                </div>
                              </div>
                            </div>

                            <div class="col-4 col-sm-12 col-lg-12">
                            <div class="art-block clearfix"><div class="art-blockcontent">
                              <div class="custom">
                              <p style="text-align: center;">&nbsp;</p>
                              <p class="Pcustum"><span style="color: #304050; font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 13px;"><span class="spanCustum">Académia</span><img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" class="art-lightbox" style="margin-bottom: 0px; border: #bbc5c9;" width="90%"></span></p>

                        <p class="Pcustum">Bon à savoir sur nos Départements et Unités de formations doctorales</p><br>
                        <div class="row justify-content-center">
                           @foreach (session('mini_icones') as $mini_icone)
                           <div class="col-4">
                              @if ($mini_icone->titre == 'E3M')
                                 <a href="/laboNA/{{ $mini_icone->idDept }}" title="{{ $mini_icone->titre }}"><img src="/{{ $mini_icone->chemin }}/{{ $mini_icone->nom }}"  style="margin: 0px 0px 0px; border: 1px none #000000;"></a>
                              @elseif($mini_icone->titre != 'E3M')
                                 <a href="/departementNA/{{ $mini_icone->idDept }}" title="{{ $mini_icone->titre }}"><img src="/{{ $mini_icone->chemin }}/{{ $mini_icone->nom }}"  style="margin: 0px 0px 0px; border: 1px none #000000;"></a>
                              @endif
                            </div>
                           @endforeach
                          </div>
                         </div>
                       </div>
                     </div>
                    </div>
                    <div class="col-4 col-sm-12 col-lg-12">
                      <div class="art-block clearfix"><div class="art-blockcontent">
                        <div class="custom">
                        <p class="Pcustum"><span style="color: #242b2d;"><span  class="spanCustum">Vie du Campus</span><img class="art-lightbox" src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" width="90%" style="margin-bottom: 0px; border: rgb(187, 197, 201); width: auto; max-width: 100%; height: auto;"></span></span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>
              
                     <!--Article : section principale-->
                    <div id="block-2" class="col-12 col-sm-6 col-lg-8  ">
                       <div class="art-post">
                           <div class="art-postcontent clearfix">
                              <div class="article">
                                   @yield('section_principale')
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--Aside droite-->
                    <div id="block-3" class=" col-12 col-sm-3 col-lg-2 art-layout-cell art-sidebar2 ustify-content-center" style="border:1px solid blue;">
                    <div class="row">
                      <div class="col-6 col-sm-12 col-lg-12">
                            <div class="art-block clearfix"><div class="art-blockcontent"><div class="custom">
                                <p>&nbsp;</p>
                            <p class="Pcustum"><span style="color: #242b2d;"><span class="spanCustum">Insolite</span><img class=" img-fluid art-lightbox img-thumbnail" src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" border="0" alt="" width="90%" height="" 
                                style="border-color: #bbc5c9; border-style: none;"></span></p>

                            <p class="Pcustum">
                                <img class=" img-fluid art-lightbox" src="/{{ session('insoliteChemin') }}/{{ session('insoliteNom') }}" border="0" alt="" width="90%" height="" style="margin-right: 0px; margin-left: 0px; border-color: #bbc5c9; border-style: solid;"></p>
                            <p style="text-align: center;">&nbsp;</p></div></div></div>
                      </div>
                      <div class="col-5 col-sm-12 col-lg-12">
                     
                           <div class="art-block clearfix"><div class="art-blockcontent"><div class="custom">
                                <p style="text-align: center;"><span class="spanCustum">Petites phrases de...</span><img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" class="art-lightbox" style="margin-bottom: 0px; border: #bbc5c9;" width="90%"></p></div></div></div>
                            <div class="art-block clearfix"><div class="art-blockcontent"><div class="newsflash">
                            <p style="text-align: right;"><span style="font-size: 10pt; color: #00ccff;"><em><strong>{{ session('citationAuteur') }}</strong></em></span><br><span style="font-size: 10pt; color: #00ccff;"><em><strong>
                                {{ session('citationDescriptionAuteur') }}<br></strong></em></span></p>
                            <p style="text-align: justify;">{{ session('citationCitation') }}</p>
                            </div></div></div>
                      </div>
                      <div class="col-4 col-sm-12 col-lg-12">
                          <div class="art-block clearfix"><div class="art-blockcontent"><div class="custom">

                            <p class="Pcustum"><span style="color: #242b2d;"><span style="color: #304050; font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 13px;"><span class="spanCustum">Suivez-nous sur les réseaux sociaux</span><img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="50%" class="art-lightbox" style="margin: 7px; border: 1px none #000000;"></span></span></p>

                             <p class="Pcustum">
                              <img src="/{{ session('logotChemin') }}/{{ session('logotNom') }}" alt="" width="29" height="29" style="margin-right: 7px; margin-left: 7px; border: 1px none #bbc5c9;">
                              <a href="" target="_blank" rel="noopener noreferrer" style="color: #4f89b0; font-size: 13px; font-family: Tahoma, Arial, Helvetica, sans-serif;" title="Notre chaine">
                              <img src="/{{ session('logoyChemin') }}/{{ session('logoyNom') }}" alt="" width="70" height="29" style="margin-right: 7px; margin-left: 7px; border: 1px none #bbc5c9;"></a></p></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
           
            <!--Inclusion du pieds de page-->
            <div>
                     @include('frontend/header_footer/pieds_de_page')
           </div>
    </div>
  <!-- plugins jQuery -->
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>

     <!-- fichier js  -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('/js/bootnavbar.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/js/script.responsive.js{') }}"></script>


    <script>
        $(function () {
            $('#bootnavbar').bootnavbar();
        })
    </script>
        <script>window.jQuery || document.write('<script src="/vendor/bootstrap4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('/vendor/bootstrap-4.0.0/assets/js/vendor/popper.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('/vendor/bootstrap-4.0.0//assets/js/vendor/holder.min.js ') }}"></script>
</body>
</html>