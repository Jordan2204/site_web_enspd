 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/homeAdmin') }}" class="brand-link">
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
          <li class="nav-item">
            <a href="{{ url('/admin/homeAdmin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>
         <li class="line"></li>
         
          <li class="nav-item">
            <a href="{{ url('/admin/usersManage') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Utilisateurs
             </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/dossiersManage') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Dossiers partenaires
             </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/adminCent') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Administration Centrale
             </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Medias
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/mediasManage/img') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/mediasManage/file') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Files</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/mediasManage/video') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Videos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">GESTION</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Departements
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/departementAdmin/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouveau</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/departementAdmin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consulter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des responsables</p>
                </a>
              </li>
             
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Infos sur la FGI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/infosfgiAdmin/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouveau</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/infosfgiAdmin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer</p>
                </a>
              </li>
             </ul>
           </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Laboratoires
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/laboAdmin/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouveau</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/admin/laboAdmin/1/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mettre a jour E3M</p>
                </a>
              </li>
             <li class="nav-item">
              <a href="/admin/membersManage" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Gestion des Membres</p>
              </a>
            </li>
          </ul>
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
                <a href="/admin/mediasAdminFichier/{{ session('file_E3M_ID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laboratoire E3M</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/mediasAdminFichier/{{ session('file_UFD_ID') }}/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Formations Doctorales</p>
                </a>
              </li>
            </ul>
          </li>

            <!-- Responsable de la cellule de communication-->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Insolites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/insolitesManage') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer</p>
                </a>
              </li>
             </ul>
           </li>
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Citations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/citationsManage') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer</p>
                </a>
              </li>
            </ul>
           </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Communiqué
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
              <a href="/admin/communiquerAdmin/{{ session('communiquerET')->id }}/edit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Aux Etudiants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/communiquerAdmin/{{ session('communiquerPU')->id }}/edit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Au Public</p>
              </a>
            </li>
            </ul>
           </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/admin/news/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouvelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/actualitesManage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualités de la FGI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/agendaManage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda de la FGI</p>
                </a>
              </li>
            </ul>
           </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Centre d'Incubation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Nouveau</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Consulter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/nosPartenairesManage" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>	Nos Partenaires</p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
