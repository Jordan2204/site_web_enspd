 <?php

     $ensID = session('ensID');
     $formID = session('formID'); 
     $choixID = session('choixID'); 
     $brefID = session('brefID'); 

   ?>
   <!--Pour reduire la nav la hauteur de la navber : dans les nav-link et nav-bar-text : py-0
       Pour aligner la nav-bar gauche : mr-auto , droite : ml-auto :
   -->
<header class="header">
       <img src="/images/static_header_footer/header.png" alt="header" class="img-fluid">
</header>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="bootnavbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">ACCUEIL <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">L'UNIVERSITE</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $brefID }}">La FGI EN QUELQUES MOTS</a></li>
              <li><a class="dropdown-item" href="/adminCentNA">L'ADMINISTRATION CENTRALE</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $choixID }}">POURQUOI CHOISIR LA FGI ?</a></li>
              <li><a class="dropdown-item" href="/#">A VENIR </a></li>
            </ul>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ETUDIER A LA FGI</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown09">
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $ensID }}">LES ENSEIGNEMENTS</a></li>
              <li><a class="dropdown-item" href="/departementNA">LES DEPARTEMENTS</a></li>
              <li><a class="dropdown-item" href="/infosfgiNA/{{ $formID }}">EN SAVOIR + ..</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECHERCHES ET INNOVATION</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="#">LE CENTRE D'INCUBATION</a></li>
               <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        UNITES DE FORMATIONS DOCTORALES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/laboNA/1">LE LABO E3M</a></li>
                        <li><a class="dropdown-item" href="/formationsdoctoralesNA">FORMATION DOCTORALE</a></li>
                        <li><a class="dropdown-item" href="#">PLUS</a></li>
                    </ul>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/infosConcours">CONCOURS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">S'INSCRIRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactNA">CONTACT</a>
          </li>
          </ul>
      </div>
    </nav>

