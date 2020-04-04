  <?php

     $ensID = session('ensID');
     $formID = session('formID'); 
     $choixID = session('choixID'); 
     $brefID = session('brefID'); 
   ?>
                 

 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/respform/homeRespForm') }}" class="brand-link">
      <img src="/{{ session('iconeFGI')->chemin }}/{{ session('iconeFGI')->nom }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FGI de l'UDo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/respform/homeRespForm') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         </li>
         <?php if (session('auth')) {
           
        ?> 
        <li class="nav-item">
            <a href="/respform/infosfgi/{{ $ensID }}/edit" class="nav-link">
              <i class="nav-icon far fa-minus"></i>
              <p>
                Les Enseignements
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/respform/infosfgi/{{ $choixID }}/edit" class="nav-link">
              <i class="nav-icon far fa-minus"></i>
              <p>
                Le choix FGI
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/respform/infosfgi/{{ $formID }}/edit" class="nav-link">
              <i class="nav-icon far fa-minus"></i>
              <p>
                En savoir + sur La FGI
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/respform/infosfgi/{{ $brefID }}/edit" class="nav-link">
              <i class="nav-icon far fa-minus"></i>
              <p>
                La FGI en BREF
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Mettre a jour l'image
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/respform/mediasRespform/{{ session('img_ensID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Les enseignements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respform/mediasRespform/{{ session('img_choixID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Le choix FGI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respform/mediasRespform/{{ session('img_formID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>En savoir + sur la FGI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respform/mediasRespform/{{ session('img_brefID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>La FGI en Bref</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
         <?php } ?>
         <li class="line"></li>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
