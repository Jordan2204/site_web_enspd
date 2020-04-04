 <?php $auth = session('auth'); ?>
  
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/respcom/homeRespCom" class="brand-link">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         </li>
         <li class="line"></li>
          <?php if($auth) {
           
        ?>
          <li class="nav-item">
            <a href="{{ url('/respcom/insolitesManage') }}" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
              <p>
                  Insolites 
             </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/respcom/citationsManage') }}" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
              <p>
                  Citations 
             </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Communiquer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/respcom/communiquer/{{ session('communiquerET')->id }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aux Etudiants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respcom/communiquer/{{ session('communiquerPU')->id }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Au Public</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/respcom/news/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouvelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respcom/actualitesManage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualités de la FGI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/respcom/agendaManage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda de la FGI</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
