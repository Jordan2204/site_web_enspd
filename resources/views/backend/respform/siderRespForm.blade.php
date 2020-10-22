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
      <span class="brand-text font-weight-light">{{ config('app.sigle') }} de l'UDo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/respform/homeRespForm') }}" class="nav-link">
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
            <a href="/respform/infosfgi" class="nav-link">
              <i class="nav-icon far fa-minus"></i>
              <p>GERER</p>             
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
