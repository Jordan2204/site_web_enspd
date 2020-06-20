  <?php $deptID = session('idDept'); $auth = session('auth'); ?>
                 
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/respdept/homeRespDept" class="brand-link">
      <img src="/{{ session('icone')->chemin }}/{{ session('icone')->nom }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
          <li class="nav-item">
            <a href="/respdept/homeRespDept" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Dashboard
              </p>
            </a>
         </li>
         <li class="line"></li>

        <?php if ($auth) {   ?>       
       
          <li class="nav-item">
             <a href="/respdept/departement/{{ $deptID }}/edit" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p> Mettre a jour</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/respdept/responsablesManage" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
              <p>Gestion Responsables</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gestion des medias
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/respdept/mediasDept/{{ session('icone')->id }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icone département</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respdept/mediasDept/{{ session('mini_icone')->id }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mini icone dépt</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
       </ul>
         
          <?php } ?>
         
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
