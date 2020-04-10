<nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
       </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
          <i class="fas fa-edit"></i>
          Manuel
        </a>
        </li> <!-- Right Side Of Navbar-->
        <li class="nav-tem">
            <!-- Authentication Links -->
            <li class="dropdown">
                   <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"><i class="nav-icon fas fa-user"></i>
                          <span class="caret"></span> {{ session('prenom') }} {{ session('name') }}
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          {!! link_to_route('respformform.show', 'Profil', [session('id_user')], ['class' => 'dropdown-item ']) !!}
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                          <a class="dropdown-item" href="{{ url('/respform/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/respform/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          
            </li>
           </ul>
  </nav>