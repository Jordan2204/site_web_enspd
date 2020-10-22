  <?php $auth = session('auth'); ?>
                 
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/respecoledoct/homeRespEcoleDoct" class="brand-link">
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
            <a href="/respecoledoct/homeRespEcoleDoct" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         </li>
         <li class="line"></li>

        <?php if (session('auth')) {
           
        ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Laboratoires
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/respecoledoct/labo/{{ session('idLabo') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mettre a jour E3M</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Autres</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/respecoledoct/formationsdoctorales/1/edit" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Formations Doctorales</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/respecoledoct/membersManage" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Gestion des Membres</p>
            </a>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Update Fichiers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/respecoledoct/mediasRespecoledoct/{{ session('file_E3M_ID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laboratoire E3M</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respecoledoct/mediasRespecoledoct/{{ session('file_UFD_ID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Formations Doctorales</p>
                </a>
              </li>
            </ul>
          </li>
        <?php } ?>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
