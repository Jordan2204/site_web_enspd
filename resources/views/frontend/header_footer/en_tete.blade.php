 <?php

     $ensID = session('ensID');
     $formID = session('formID'); 
     $choixID = session('choixID'); 
     $brefID = session('brefID'); 

   ?>
   <!--Pour reduire la nav la hauteur de la navber : dans les nav-link et nav-bar-text : py-0
       Pour aligner la nav-bar gauche : mr-auto , droite : ml-auto :
   -->
<header id="header" class="header">
  <img src="/storage/images/HLL6Rm86f5.jpg" alt="header" title="image header">
  
 <nav  id="bootnavbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img class="img-fluid rounded" style="height: 40px;" src="/storage/images/HLL6Rm86e4.jpg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">ACCUEIL <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ETUDIER A L'ENSPD</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="/#">Le Mot du directeur</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $brefID }}">L'ENSPD en Bref</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $choixID }}">Pourquoi choisir l'ENSPD ?</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $ensID }}">Les Enseignements</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $formID }}">Modalités Pour s'incrire a l'ENSPD</a></li>
              <li><a class="dropdown-item" href="/adminCentNA">L'Administration centrale</a></li>
              <li><a class="dropdown-item" href="/#">Organigramme</a></li>
              <li><a class="dropdown-item" href="/#">Reglement Intérieur</a></li>
              <li><a class="dropdown-item" href="/contactNA">Contact</a></li>
              <li><a class="dropdown-item" href="/#">Localisation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DEPARTEMENTS</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown09" style="max-width: 1000px;">

                  @foreach (session('depts') as $dept) 
                    @foreach (session('medias') as $media)
                      @if ($dept->media_id == $media->id)
                       
                        <li>

                          <a class="dropdown-item" href="/departementNA/{{ $dept->id }}"><img class="card-img-top img-fluid" src="/{{$media->chemin}}/{{$media->nom}}" alt="Dept" style="width: 30px;height: 30px"> {{ $dept->nomDept }} ({{ $dept->ABBR }})</a>
                      </li>
                      @endif
                    @endforeach
                  @endforeach
              
            </ul>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SCOLARITE</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
               <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Livret Etudiant
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      @foreach( session('livrets') as $livret)
                        <li><a class="dropdown-item" href="{{ $livret->chemin }}/{{ $livret->nom }}">{{ $livret->titre }}</a></li>
                      @endforeach
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PV/2020
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/laboNA/1">Notes CC1</a></li>
                        <li><a class="dropdown-item" href="/formationsdoctoralesNA">Notes CC2</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Emploi du Temps
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        @foreach (session('depts') as $dept) 
                         <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                          {{ $dept->nomDept }} ({{ $dept->ABBR }})
                          </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                              <li><a class="dropdown-item" href="/laboNA/1">TCO</a></li>
                              <li><a class="dropdown-item" href="/laboNA/1">Niveau 4</a></li>
                              <li><a class="dropdown-item" href="/laboNA/1">Niveau 5</a></li>
                           </ul>
                        </li>
                        @endforeach
                    </ul>
                  </li>
                 <!--<li><a class="dropdown-item" href="#">Statistiques</a></li>-->
            
            </ul>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECHERCHES ET INNOVATION</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="#">Le Centre d'Incubation</a></li>
              <li><a class="dropdown-item" href="/laboNA/1">Le Centre d'expérimentation</a></li>
               <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        UNITES DE FORMATIONS DOCTORALES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/laboNA/1">Le LABO E3M</a></li>
                        <li><a class="dropdown-item" href="/formationsdoctoralesNA">Formations Doctorales</a></li>
                    </ul>
                  </li>
            </ul>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONCOURS</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $formID }}">Modalités d'inscription</a></li>
              <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Niveau I
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/laboNA/1">Inscription</a></li>
                         <li><a class="dropdown-item" href="/laboNA/1">Liste des Inscrits</a></li>
                        <li><a class="dropdown-item" href="/formationsdoctoralesNA">Resultats 2020</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Niveau III
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/laboNA/1">Inscription</a></li>
                        <li><a class="dropdown-item" href="/laboNA/1">Liste des Inscrits</a></li>
                        <li><a class="dropdown-item" href="/formationsdoctoralesNA">Resultats 2020</a></li>
                    </ul>
                  </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COOPERATION</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="#">Coopération Nationale</a></li>
              <li><a class="dropdown-item" href="#">Coopération Internationale</a></li>
              
            </ul>
          </li>
          
          <!--<li>
            <form class="form-inline my-2 my-md-0" action="" method="post">
              <input class="form-control" type="text" placeholder="Rechercher">
            </form>
          </li>-->
          </ul>
    </div>
    </nav>
</header>


